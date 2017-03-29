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
    });

    _this.header.init();
    _this.lastShow.init();

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

Site.header = {
  init: function() {
    var _this = this;

    $(document).ready(function () {
      _this.bind();
    });

  },

  bind: function() {
    var _this = this;

  },
};

Site.lastShow = {
  init: function() {
    var _this = this;

    $(document).ready(function () {
      _this.bind();
    });
  },

  bind: function() {
    var _this = this;

    _this.$lastShowContainer =  $('#last-show');
    _this.$playlistContainer =  $('#playlist-container');
    _this.$coverContainer =  $('#cover-container');
    _this.$playlistEmbed =  $('#playlist-embed');

    $('.play-playlist').on('click', function(e) {
      _this.$playlistEmbed[0].src +='&autoplay=1';
      _this.$coverContainer.slideToggle(300, function() {
        _this.$lastShowContainer.addClass('black-bg');
      });
      _this.$playlistContainer.slideToggle(300, function() {
      });
    });
  },
};

Site.Share = {
  onFB: function() {
    FB.ui({
      method: 'share',
      href: document.URL,
    }, function(response){});
  },
  onTW: function(){
    window.open("https://twitter.com/intent/tweet?url="+encodeURIComponent(document.URL)+"&text="+encodeURIComponent(document.title)+ "&count=none/", "", "height=300, width=550, resizable=1");
    return true;
  }
};

Site.init();
