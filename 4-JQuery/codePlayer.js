 
            function updateOutput() {
                
                $("#outputIframe").contents().find("html").html("<html><head><style type='text/css'>" + $("#csstextarea").val() + "</style></head><body>" + $("#htmltextarea").val() + "</body></html>");
                
                document.getElementById("outputIframe").contentWindow.eval($("#javascripttextarea").val());
                
            }
            
            $(".content").hover(function(){
                
                $(this).addClass("highlightedToggle");
                
            }, function (){
                
                $(this).removeClass("highlightedToggle");
                
            });
            
            $(".content").click(function(){
                
                $(this).toggleClass("active");
                
                $(this).removeClass("highlightedToggle");
                
                var element = $(this).attr("id") + "textarea";
                
                $("#" + element).toggleClass("hidden");
                
                var limit = 4 - $(".hidden").length;
            
                $(".panel").width(($(window).width() / limit) - 17);
                    
            });
            
            /*$("#html").click(function(){
                
                $("#htmltextarea").toggle();
                
            }) */
            
            $("#output").click(function(){
                
                $("#outputIframe").toggle();
                
            })
                
            $("textarea").height($(window).height() - $("#container").height() - 15);
            
            $(".panel").height($(window).height() - $("#container").height() - 15);
            
            $(".panel").width(($(window).width() / 2) - 17);
            
            updateOutput();
            
            $("#htmltextarea").on("change keyup paste", function () {
                
                updateOutput();
                
            });
            