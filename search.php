<?php require_once TEMPLATEPATH . "/assets/functions/GoogleSearch.php";
get_header(); 
$theme_option = flagship_sub_get_global_options(); 
$collection_name = $theme_option['flagship_sub_search_collection']; ?>
			
	<div id="content">

		<div id="inner-content" class="row">
	
			<main id="main" class="small-12 large-8 columns">
				<h1 class="page-title">Search Results</h1>
	
					<?php 
					try {
					    $search = new KSAS_GoogleSearch();
					    $resultsPageNum = 1;
					    if (array_key_exists('resultsPageNum', $_REQUEST)) {
					        $resultsPageNum = $_REQUEST['resultsPageNum'];
					    }
					    $resultsPerPage = 35;
					    $baseQueryURL = 'https://search.johnshopkins.edu/search?&client=ksas_frontend';
					    $results = $search->query($_REQUEST['q'], $_REQUEST['site'], $baseQueryURL, $resultsPageNum, $resultsPerPage);
					    $hits = $results->getNumHits();
					    $displayQuery = $results->getDisplayQuery();
					    $docTitle = 'Search Results';
					    $sponsored_result = $results->getSponsoredResult();
					    ?>

					    <?php if ($hits > 0) { ?>

					       <div class="callout secondary">
						       <form class="search-form" action="<?php echo site_url('/search'); ?>" method="get">
						            <fieldset> 
						                <label>
						                    Search:
						                    <input type="text" class="input-text" name="q" value="<?php echo $displayQuery ?>" />
						                </label>
						                <div class="row">
						                    <div class="small-12 columns">
						                        <input type="radio" name="site" id="thisSite" value="<?php echo $collection_name; ?>">
						                            <label for="thisSite">This & Related Websites</label>
						                        <input type="radio" name="site" id="krieger" value="krieger_collection">
						                            <label for="krieger">Krieger Network</label>
						                        <input type="radio" name="site" id="allJHU" value="jhuedu">
						                            <label for="allJHU">All of JHU</label>
						                    </div>   
						                </div>                    
						                <input type="submit" class="button blue_bg" id="search_again" value="Search Again" />
						                    <label for="search_again" class="screen-reader-text">
						                    Search Again
						                    </label>
						            </fieldset>
						       </form>
					       </div>   

					       <p>Results <strong><?php echo $results->getFirstResultNum() ?> - <?php echo $results->getLastResultNum() ?></strong> of about <strong><?php echo $hits ?></strong></p>
					           
					        <?php if (empty($sponsored_result) == false) { ?>
						        <div class="callout primary" id="sponsored">
						        	<h2>Featured Result</h2>
						        	<h3><a href="<?php echo $sponsored_result['sponsored_url']; ?>">
						        			<?php echo $sponsored_result['sponsored_title']; ?>
						        		</a><small> &mdash;<?php echo $sponsored_result['sponsored_url']; ?></small>
						        	</h3>
						        </div>
					         <?php } ?>   
					            <div id="search-results">
					                <ul>
								        <?php
								        while ($result = $results->getNextResult()) {
								            // note what results are PDFs
								            $pdfNote = '';
								            if (preg_match('{application/pdf}', $result['mimeType'])) {
								                $pdfNote = '<span class="black"><span class="fa fa-file-pdf-o" aria-hidden="true"></span> [PDF]</span> ';
								            }
								            ?>
					                    <li>
					                        <h4><?php echo $pdfNote ?><a href="<?php echo $result['path'] ?>"><?php echo $result['title'] ?></a></h4>
					                        <?php if (array_key_exists('description', $result) && $result['description']) { ?>
								                 <p><?php echo $result['description'] ?></p>
								            <?php } ?>
								            <div class="url"><?php echo $result['path'] ?> - <?php echo $result['sizeHumanReadable'] ?></div>
								        </li>
								        <hr>
								            <?php } ?>
					                </ul>
					            </div>
					             
					            <div class="section">
							        <?php $notices = $results->getNotices();
							            foreach ($notices as $notice) {
							                ?>
							                <p class="notice"><?php echo $notice ?></p>
							                <?php
							            }
							        ?>
					                <div class="pagination">
					                     
								        <?php foreach ($results->getResultsetLinks() as $resultsetLink) {
								           echo '<li>' . $resultsetLink . '</li>';
								        } ?>
					                    <?php echo '<li>' . $results->getNextLink() . '</li>'; ?> 
					                </div>
					                 
					            </div>
					        <?php
					    } else {
					        // no hits
					        ?>
					            
					    <?php $notices = $results->getNotices();
					        foreach ($notices as $notice) { ?>
					            <p class="notice"><?php echo $notice ?></p>
					     <?php } ?>
					      <div class="callout secondary">    
					       <p>Sorry, No Results. Try your search again on <a href="https://www.jhu.edu/search/">JHU.edu</a>, or enter a new search term below:</p>
					       <form class="search-form" action="<?php echo site_url('/search'); ?>" method="get">
					            <fieldset> 
					                <label>
					                    Search:
					                    <input type="text" class="input-text" name="q" value="<?php echo $displayQuery ?>" />
					                </label>
					                <div class="row">
					                    <div class="small-12  columns">
					                        <input type="radio" name="site" id="thisSite" value="<?php echo $collection_name; ?>">
					                            <label for="thisSite">This & Related Websites</label>
					                        <input type="radio" name="site" id="krieger" value="krieger_collection">
					                            <label for="krieger">Krieger Network</label> 
					                        <input type="radio" name="site" id="allJHU" value="jhuedu">
					                            <label for="allJHU">All of JHU</label>
					                    </div>   
					                </div>                    
					                <input type="submit" class="button blue_bg" id="search_again" value="Search Again" />
					                    <label for="search_again" class="screen-reader-text">
					                    Search Again
					                    </label>
					            </fieldset>
					       </form>        
						</div>
					<?php } } catch (KSAS_GoogleSearchException $e) {
					    $docTitle = "Search Temporarily Unavailable";
					?>
					    <div class="section">
					        <p>We're sorry, the search engine is temporarily unavailable. Please try your search again later.</p>
					    </div>
					<?php } ?>
		    </main> <!-- end #main -->
		
		    <?php get_sidebar(); ?>
		
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>
