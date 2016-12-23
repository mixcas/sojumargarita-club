/* jshint browser: true, devel: true, indent: 2, curly: true, eqeqeq: true, futurehostile: true, latedef: true, undef: true, unused: true */
/* global $, jQuery, document, Site, Modernizr */

Site = {
  mobileThreshold: 601,
  init: function() {
    var _this = this;

    $(window).resize(function(){
      _this.onResize();
    });

    $(document).ready(function () {
      $('#header').headroom();

      _this.lastShow.init();
    });


  },

  onResize: function() {
    var _this = this;

  },

  fixWidows: function() {
    // utility class mainly for use on headines to avoid widows [single words on a new line]
    $('.js-fix-widows').each(function(){
      var string = $(this).html();
      string = string.replace(/ ([^ ]*)$/,'&nbsp;$1');
      $(this).html(string);
    });
  },
};

Site.lastShow = {
  init: function() {
    var _this = this;

    _this.$playlistContainer =  $('#playlist-container');
    _this.$coverContainer =  $('#cover-container');
    _this.$playlistEmbed =  $('#playlist-embed');

    _this.bind();
  },

  bind: function() {
    var _this = this;

    $('.play-playlist').on('click', function(e) {
      _this.$playlistEmbed[0].src +='&autoplay=1';
      _this.$coverContainer.slideToggle(300);
      _this.$playlistContainer.slideToggle(300, function() {
      });
    });
  },
};

Site.init();
