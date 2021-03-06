jQuery(document).foundation();

  // following pulled from foundation.dropdownMenu.js
  Foundation.Keyboard.register('DropdownMenu',{
//    'ENTER': 'open',
    'SPACE': 'open',
    'ARROW_RIGHT': 'next',
    'ARROW_UP': 'up',
    'ARROW_DOWN': 'down',
    'ARROW_LEFT': 'previous',
    'ESCAPE': 'close'
  });
/*! Backstretch - v2.0.4 - 2013-06-19
* http://srobbin.com/jquery-plugins/backstretch/
* Copyright (c) 2013 Scott Robbin; Licensed MIT */
(function(a,d,p){a.fn.backstretch=function(c,b){(c===p||0===c.length)&&a.error("No images were supplied for Backstretch");0===a(d).scrollTop()&&d.scrollTo(0,0);return this.each(function(){var d=a(this),g=d.data("backstretch");if(g){if("string"==typeof c&&"function"==typeof g[c]){g[c](b);return}b=a.extend(g.options,b);g.destroy(!0)}g=new q(this,c,b);d.data("backstretch",g)})};a.backstretch=function(c,b){return a("body").backstretch(c,b).data("backstretch")};a.expr[":"].backstretch=function(c){return a(c).data("backstretch")!==p};a.fn.backstretch.defaults={centeredX:!0,centeredY:!0,duration:5E3,fade:0};var r={left:0,top:0,overflow:"hidden",margin:0,padding:0,height:"100%",width:"100%",zIndex:-999999},s={position:"absolute",display:"none",margin:0,padding:0,border:"none",width:"auto",height:"auto",maxHeight:"none",maxWidth:"none",zIndex:-999999},q=function(c,b,e){this.options=a.extend({},a.fn.backstretch.defaults,e||{});this.images=a.isArray(b)?b:[b];a.each(this.images,function(){a("<img />")[0].src=this});this.isBody=c===document.body;this.$container=a(c);this.$root=this.isBody?l?a(d):a(document):this.$container;c=this.$container.children(".backstretch").first();this.$wrap=c.length?c:a('<div class="backstretch"></div>').css(r).appendTo(this.$container);this.isBody||(c=this.$container.css("position"),b=this.$container.css("zIndex"),this.$container.css({position:"static"===c?"relative":c,zIndex:"auto"===b?0:b,background:"none"}),this.$wrap.css({zIndex:-999998}));this.$wrap.css({position:this.isBody&&l?"fixed":"absolute"});this.index=0;this.show(this.index);a(d).on("resize.backstretch",a.proxy(this.resize,this)).on("orientationchange.backstretch",a.proxy(function(){this.isBody&&0===d.pageYOffset&&(d.scrollTo(0,1),this.resize())},this))};q.prototype={resize:function(){try{var a={left:0,top:0},b=this.isBody?this.$root.width():this.$root.innerWidth(),e=b,g=this.isBody?d.innerHeight?d.innerHeight:this.$root.height():this.$root.innerHeight(),j=e/this.$img.data("ratio"),f;j>=g?(f=(j-g)/2,this.options.centeredY&&(a.top="-"+f+"px")):(j=g,e=j*this.$img.data("ratio"),f=(e-b)/2,this.options.centeredX&&(a.left="-"+f+"px"));this.$wrap.css({width:b,height:g}).find("img:not(.deleteable)").css({width:e,height:j}).css(a)}catch(h){}return this},show:function(c){if(!(Math.abs(c)>this.images.length-1)){var b=this,e=b.$wrap.find("img").addClass("deleteable"),d={relatedTarget:b.$container[0]};b.$container.trigger(a.Event("backstretch.before",d),[b,c]);this.index=c;clearInterval(b.interval);b.$img=a("<img />").css(s).bind("load",function(f){var h=this.width||a(f.target).width();f=this.height||a(f.target).height();a(this).data("ratio",h/f);a(this).fadeIn(b.options.speed||b.options.fade,function(){e.remove();b.paused||b.cycle();a(["after","show"]).each(function(){b.$container.trigger(a.Event("backstretch."+this,d),[b,c])})});b.resize()}).appendTo(b.$wrap);b.$img.attr("src",b.images[c]);return b}},next:function(){return this.show(this.index<this.images.length-1?this.index+1:0)},prev:function(){return this.show(0===this.index?this.images.length-1:this.index-1)},pause:function(){this.paused=!0;return this},resume:function(){this.paused=!1;this.next();return this},cycle:function(){1<this.images.length&&(clearInterval(this.interval),this.interval=setInterval(a.proxy(function(){this.paused||this.next()},this),this.options.duration));return this},destroy:function(c){a(d).off("resize.backstretch orientationchange.backstretch");clearInterval(this.interval);c||this.$wrap.remove();this.$container.removeData("backstretch")}};var l,f=navigator.userAgent,m=navigator.platform,e=f.match(/AppleWebKit\/([0-9]+)/),e=!!e&&e[1],h=f.match(/Fennec\/([0-9]+)/),h=!!h&&h[1],n=f.match(/Opera Mobi\/([0-9]+)/),t=!!n&&n[1],k=f.match(/MSIE ([0-9]+)/),k=!!k&&k[1];l=!((-1<m.indexOf("iPhone")||-1<m.indexOf("iPad")||-1<m.indexOf("iPod"))&&e&&534>e||d.operamini&&"[object OperaMini]"==={}.toString.call(d.operamini)||n&&7458>t||-1<f.indexOf("Android")&&e&&533>e||h&&6>h||"palmGetResource"in d&&e&&534>e||-1<f.indexOf("MeeGo")&&-1<f.indexOf("NokiaBrowser/8.5.0")||k&&6>=k)})(jQuery,window);

var $j = jQuery.noConflict();
$j(".backstretch-banner-home").backstretch([ 
    "http://krieger.jhu.edu/humanities-institute/wp-content/themes/ksas_cross_divisional_humanities/assets/images/headers/hdr-10.jpg", 
    "http://krieger.jhu.edu/humanities-institute/wp-content/themes/ksas_cross_divisional_humanities/assets/images/headers/hdr-11.jpg",
    "http://krieger.jhu.edu/humanities-institute/wp-content/themes/ksas_cross_divisional_humanities/assets/images/headers/hdr-12.jpg",
    "http://krieger.jhu.edu/humanities-institute/wp-content/themes/ksas_cross_divisional_humanities/assets/images/headers/hdr-13-campus-students.jpg", 
    "http://krieger.jhu.edu/humanities-institute/wp-content/themes/ksas_cross_divisional_humanities/assets/images/headers/hdr-13-map.jpg",
    "http://krieger.jhu.edu/humanities-institute/wp-content/themes/ksas_cross_divisional_humanities/assets/images/headers/hdr-14-campus-students.jpg",
    "http://krieger.jhu.edu/humanities-institute/wp-content/themes/ksas_cross_divisional_humanities/assets/images/headers/hdr-15-egypt-columns.jpg"
    ], {fade: 750, duration: 4000});

var $u = jQuery.noConflict();
$u(document).ready(function () { // Backstretch

    var images = []; // regular array (add an optional integer
    images[0] = "http://krieger.jhu.edu/humanities-institute/wp-content/themes/ksas_cross_divisional_humanities/assets/images/headers/hdr-10.jpg";
    images[1] = "http://krieger.jhu.edu/humanities-institute/wp-content/themes/ksas_cross_divisional_humanities/assets/images/headers/hdr-11.jpg";
    images[2] = "http://krieger.jhu.edu/humanities-institute/wp-content/themes/ksas_cross_divisional_humanities/assets/images/headers/hdr-12.jpg";
    images[3] = "http://krieger.jhu.edu/humanities-institute/wp-content/themes/ksas_cross_divisional_humanities/assets/images/headers/hdr-13-campus-students.jpg";
    images[4] = "http://krieger.jhu.edu/humanities-institute/wp-content/themes/ksas_cross_divisional_humanities/assets/images/headers/hdr-13-map.jpg";
    images[5] = "http://krieger.jhu.edu/humanities-institute/wp-content/themes/ksas_cross_divisional_humanities/assets/images/headers/hdr-14-campus-students.jpg";
    images[6] = "http://krieger.jhu.edu/humanities-institute/wp-content/themes/ksas_cross_divisional_humanities/assets/images/headers/hdr-15-egypt-columns.jpg";


    Array.prototype.shuffle = function () {
        var len = this.length;
        var i = len;
        while (i--) {
            var p = parseInt(Math.random() * len);
            var t = this[i];
            this[i] = this[p];
            this[p] = t;
        }
    };

    images.shuffle();

    // A little script for preloading all of the images
    // It's not necessary, but generally a good idea
    $u(images).each(function () {
        $u('<img/>')[0].src = this;
    });

    var index = 0;
    $u(".backstretch-banner").backstretch(images[index], {
            fade: 750,
            duration: 4000
    });
});

var $a = jQuery.noConflict();
$a(document).ready(function() {
  $a('.backstretch img').each(function(){
    var $img = $a(this);
    var filename = $img.attr('src')
    $img.attr('alt', "header image");
  });
});
//Offcanvas menu
(function(w) {
  var $z = jQuery.noConflict();
  var $container = $z('.offcanvas-top');
  var $cHeightMax = $z('.o-content').outerHeight();
  console.log($cHeightMax);
  $z(".off-canvas-submenu").hide();
  var $cHeightMin = $z('.o-content').outerHeight();
  console.log($cHeightMin);
  $z(document).ready(function() {
    buildCanvas();
  });

  function buildCanvas() {
    $z(".off-canvas-submenu-call").click(function() {
      var icon = $z(this).parent().next(".off-canvas-submenu").is(':visible') ? '+' : '-';
      var $subMenu = $z(this).parent().next(".off-canvas-submenu");

      $z(this).find("span").text(icon);

      if ($subMenu.css('display') === 'none') {
        $container.height($cHeightMax);
        $subMenu.slideToggle('fast');
      } else {
        $container.height($cHeightMin);
        $subMenu.slideToggle('fast');
      }

    });

    $z('<a class="button secondary" href="#" id="trigger">Explore KSAS +</a>').appendTo($container);

    $z('#trigger').bind('click', function(e) {
      e.preventDefault();
      var $this = $z(this);
      $container.toggleClass('active');
      if ($container.hasClass('active')) {
        $container.height($cHeightMin);
       $z('.o-content').show();
        $this.text('Hide -');
      } else {
        $container.height(50);
        $z('.o-content').hide();
        $this.text('Explore KSAS +');
        $z(".off-canvas-submenu").hide();
        $z(".off-canvas-submenu-call span").text('+');
      }
    });

  }

  $z(window).resize(function() { //On Window resizeBy(
    $cHeight = $z('.o-content').outerHeight();
    console.log($cHeight);
  });

})(this);
/*
These functions make sure WordPress
and Foundation play nice together.
*/

jQuery(document).ready(function() {

    // Remove empty P tags created by WP inside of Accordion and Orbit
    jQuery('.accordion p:empty, .orbit p:empty').remove();

	 // Makes sure last grid item floats left
	jQuery('.archive-grid .columns').last().addClass( 'end' );

	// Adds Flex Video to YouTube and Vimeo Embeds
  jQuery('iframe[src*="youtube.com"], iframe[src*="vimeo.com"]').each(function() {
    if ( jQuery(this).innerWidth() / jQuery(this).innerHeight() > 1.5 ) {
      jQuery(this).wrap("<div class='responsive-embed widescreen'/>");
    } else {
      jQuery(this).wrap("<div class='responsive-embed'/>");
    }
  });

});