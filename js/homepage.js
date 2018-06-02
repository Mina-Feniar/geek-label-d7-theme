(function ($) {
  Drupal.behaviors.homePage  = {
    attach: function (context, settings) {
      // Hiding the alert messages automatically.
      setTimeout(function(){
        $(".alert-success").fadeOut( "slow" ); }, 3000
      );

      // Setting the Homepage sections Anchors and Colors.
      var anchors = Drupal.settings.homePage.anchors + '';
      var colors = Drupal.settings.homePage.colors + '';
      $('#fullpage').fullpage({
        anchors: anchors.split(','),
        sectionsColor: colors.split(','),
        navigation: false,
        navigationPosition: 'right',
        responsiveWidth: 320,
        scrollBar: true,
        afterResponsive: function(isResponsive){
        }
      });
    }
  }
}(jQuery));