$(document).ready(function() {
    $('#fullpage').fullpage({
        sectionsColor: ['var(--black)', 'var(--black)'],
        keyboardScrolling: true,
        scrollOverflow: true,
        scrollOverflowReset: false,
        onLeave: function(origin, destination, direction){
            var leavingSection = this;
            
            console.log(origin.index);

            if(destination.index == 0) {
                $("#header").css("background-color", "var(--navbar-bg-color)");
            } else if(origin.index == 0) {
                $("#header").css("background-color", "var(--navbar-bg-color-alt)");
            }
        }
    });
});