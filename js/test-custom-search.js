// JavaScript Document

        $(function () {
          //Renseigner ici entre ' ' le code obtenu sur Google
            var cx = '000921094841230432837:-x5at-rbslu';
         
                if($("div#search-box").length){ 
              //phpBB3 avec barre de recherche
              $("div#search-box").html("<div id='my_gs'><gcse:search></gcse:search></div>");
          }else{
              if($("div#page-body").length){
                //phpBB2, phpBB3 sans barre de recherche & punBB
                $("<div id='my_gs'><gcse:search></gcse:search></div>").insertBefore("div#page-body");
              }else{
                //Invision
                $("<div id='my_gs'><gcse:search></gcse:search></div>").insertAfter("div#submenu");
              }
          }
         
          var gcse = document.createElement('script');
          gcse.type = 'text/javascript';
          gcse.async = true;
          gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
              '//www.google.com/cse/cse.js?cx=' + cx;
          var s = document.getElementsByTagName('script')[0];
          s.parentNode.insertBefore(gcse, s);
        });