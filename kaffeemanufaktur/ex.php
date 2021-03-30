<style>
.loader,
        .loader:after {
            border-radius: 50%;
            width: 10em;
            height: 10em;
        }
        .loader {            
            margin: 60px auto;
            font-size: 10px;
            position: relative;
            text-indent: -9999em;
            border-top: 1.1em dotted #c30013;
            border-right: 1.1em dotted #ffffff;
            border-bottom: 1.1em dotted rgba(255, 0, 0, 1);
            border-left: 1.1em dotted #ffffff
            -webkit-transform: translateZ(0);
            -ms-transform: translateZ(0);
            transform: translateZ(0);
            -webkit-animation: load8 1.1s infinite linear;
            animation: load8 1.1s infinite linear;
        }
        @-webkit-keyframes load8 {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }
        @keyframes load8 {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }
        #loadingDiv {
            position:fixed;
            padding-left: 20%;
            padding-top:5%;
            vertical-align: middle;
            width:50%;
            height:50%;
            background-color:#fff;
        }
    </style>
This script will add a div that covers the entire window as the page loads. It will show a CSS-only loading spinner automatically. It will wait until the window (not the document) finishes loading.

  <ul>
    <li>Works with jQuery 3, which has a new window load event</li>
    <li>No image needed but it's easy to add one</li>
    <li>Change the delay for branding or instructions</li>
    <li>Only dependency is jQuery.</li>
  </ul>

Place the script below at the bottom of the body.

CSS loader code from https://projects.lukehaas.me/css-loaders

<!-- Place the script below at the bottom of the body -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
$('body').append('<div style="" id="loadingDiv"><div class="loader">Loading...lkdjlksadjfkwfl</div></div>');
$(window).on('load', function(){
    setTimeout(removeLoader, 10000); //wait for page load PLUS two seconds.
    $('#loadingDiv').append('<div style="text-align:center;font-weight:bold"><p>Please wait while your transaction is being processed.<br>Do not close your browser or use the back button at this time.</p><div>');
});
function removeLoader(){
    $( "#loadingDiv" ).fadeOut(1000, function() {
      // fadeOut complete. Remove the loading div
      $( "#loadingDiv" ).remove(); //makes page more lightweight 
  });  
}
</script>