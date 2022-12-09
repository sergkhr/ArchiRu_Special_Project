$(document).click(function(){
    block_height_update(1);  
});

$(document).ready(function(){
    $(".faq__item").slice(0, 4).show();
    $(".details__button IMG").on("click", function(e){
        e.preventDefault();
        $(".faq__item:hidden").slice(0, 4).slideDown();
        if($(".faq__item:hidden").length == 0){
           $(".details__button IMG").text("").addClass("noContent");
        }
    });
    define_records_rows();
    $(".article-list .details__button").click(function(){show_hidden_records();});
    $(".objects__container .details__button").click(function(){show_hidden_records(2);});

    $(".glossary__list_item").click(function(e){ // Click on glossary item not only on title
        if(e.target === this || $(e.target).hasClass("glossary_title")){ //so it works only if click on title (with padding of parent) and not content 
            $(".glossary__content").css({"display":"none"});
            $(".glossary__list_item").removeClass("opened");
            $(this).find(".glossary__content").css({"display":"block"});
            $(this).addClass("opened") //to maintain hover state while opened
            block_height_update();
            if($(this).hasClass("glossary1")){
                glossary_content_choose_position($(this).find(".glossary__content"));
            }
        }
    });
    $(".content__closer > span").click(function(){
        $(".glossary__content").css({"display":"none"});
        $(".glossary__list_item").removeClass("opened");
        setTimeout(function(){block_height_update();}, 70);
        //$(this).closest(".glossary__list_item").css({"background": "#0066FF", "color": "#FFF"});
    });
    headersHandler();
  });
  
function define_records_rows(){
    // Showing records' first rows in block by a given count 
    // but others rows do hide
    let win_width, els_hidden = 0, con_width, row_width = 0, row_count = 0, container_id;
    const EL_MARGIN = 20;
    $(".article-list .details__button, .article-list .details__link").hide();
    win_width = $(window).width();
    if(win_width > 450){
        $(".article-list__container").each(function(){
            row_width = 0;
            row_count = 0;
            els_hidden = 0;
            con_width = $(this).width();
            container_id = $(this).closest(".article-list").attr("id");
            allowed_rows = eval("allowed_rows_" + container_id);
            typeof allowed_rows==="undefined" ? allowed_rows = 2 : true;
            $(this).find(".article-list__item").each(function(key, data){
               this_el_has_class = $(data).hasClass("rectangle");
               this_el_has_class===true ? cur_el_w = 580 + EL_MARGIN: cur_el_w = 280 + EL_MARGIN;
               row_width += cur_el_w;
               if(row_width >= con_width){
                  row_count++;
                  row_width = cur_el_w;
               }
               if(row_count >= allowed_rows){
                  els_hidden++;
                  $(this).hide();
               }
            });
            if(els_hidden > 0){
               $(this).closest(".article-list").find(".details__button, .details__link").show();
            }
        });       
    }
    
    // Showing records' first rows in block FAQ by a given count 
    // but others rows do hide
    row_width = 0;
    row_count = 0;
    els_hidden = 0;
    win_width = $(window).width();
    allowed_rows = 2;
    con_width = $(".faq__item-list").width();
    if(win_width > 450){
        $(".faq__item").each(function(i){
	    cur_el_w = $(this).width();
	    row_width += cur_el_w;
	    if(row_width >= con_width){
	        row_count++;
	        row_width = cur_el_w;
	    }
            if(row_count >= allowed_rows){
               els_hidden++;
               $(this).hide();
            }
        });
	els_hidden > 0 ? $(".faq__details").show() : true;
	$(".faq__details").click(function(){
	   $(".faq__item:hidden").show();
	   $(".faq__details").hide();
	});
    }
    
    // Showing records' first rows in block articles design with circles by a given count 
    // but others rows do hide
    row_width = 0;
    row_count = 0;
    els_hidden = 0;    
    typeof allowed_rows_in_block_2==="undefined" ? allowed_rows_in_block_2 = 2 : true;
    con_width = $(".objects__container_list_2").width();
    $(".objects__container .details__button, .objects__container .details__link").hide();
    if(win_width > 450){
        $(".objects__container_list_2 .objects__list_item").each(function(i){
            cur_el_w = 280 + EL_MARGIN;
	    row_width += cur_el_w;
	    if(row_width >= con_width){
	        row_count++;
	        row_width = cur_el_w;
	    }
            if(row_count >= allowed_rows_in_block_2){
               els_hidden++;
               $(this).hide();
            }
        });
        if(els_hidden > 0){
            $(".objects__container .details__button, .objects__container .details__link").show();
        }
    } 
    
}

function show_hidden_records(rec_type=1){
    if(rec_type===1){
        $(".article-list__item").each(function(){
           $(this).css("display")==="none" ? $(this).show() :  true; 
        });
        $(".article-list .details__button, .article-list .details__link").hide();
    }
    else if(rec_type===2){
        $(".objects__list_item").each(function(){
           $(this).css("display")==="none" ? $(this).show() :  true; 
        });
        $(".objects__container .details__button, .objects__container .details__link").hide();
    }
}

window.onresize = function(event) {
    $(".article-list__item").show();
    setTimeout(function(){define_records_rows();}, 600);
    if($(".glossary__content.glossary1:visible").length){
        glossary_content_choose_position($(".glossary__content.glossary1:visible").first());
    }
};

function block_height_update(bt=0){
    // ajusting height of active block (glossary or faq) preventing come it out parent's block
    let el_margin_bottom;
    if(bt===0){
        // update glossary active block
        $(".glossary__list_item").css({"margin-bottom":"auto"});
        if($(".glossary__content:visible").length){
             el_margin_bottom = $(".glossary__content:visible").height() + 50;
             $(".glossary__content:visible").closest(".glossary__list_item").css({"margin-bottom":"" + el_margin_bottom + "px"});
        }
    }
    else if(bt===1){
        // update faq active block
        $(".faq__item").css({"margin-bottom":""});
        $(".faq__item").removeClass("faq_active");
        if($(".faq__item_content:visible").length){
            el_margin_bottom = $(".faq__item_content:visible").height() + 50;
            $(".faq__item").css({"margin-bottom":"auto"});
            $(".faq__item_content:visible").closest(".faq__item").css({"margin-bottom":"" + el_margin_bottom + "px"});
            $(".faq__item_content:visible").closest(".faq__item").addClass("faq_active");
        }   
    }
}

function glossary_content_choose_position(element){
    let glossary_list = element.closest(".glossary__list");
    if(glossary_list.width() < 680){ //element won't fit in the paddings, we remove position relative, so this element will be full screen (positioning from glossary__list)
        element.css({"width": "100vw", "right":"0", "left":"auto"});
        element.closest(".glossary__list_item").css({"position":"initial"});
    }
    else{
        element.css({"width": "", "right":"", "left":""}); //cleaning styles after previous condition
        element.closest(".glossary__list_item").css({"position":""});

        element.css({"right":"auto", "left":"0"});
        let element_right = element.offset().left + element.width();
        let glossary_list_right = glossary_list.offset().left + glossary_list.width();
        if(element_right > glossary_list_right){
            element.css({"right":"0", "left":"auto"});
            if(element.offset().left - glossary_list.offset().left < 0){
                element.css({"right": (-element.width() / 2) + "px", "left":"auto"});
            }
        }
    }
}

function headersHandler(){
    let final_h;
    let divs_list = ['article-list', 'article__item', 'objects__list_item'];
    divs_list.forEach(function(item){
        final_h = 0;
	if(item === 'article-list'){
	    $("." + item).each(function(){
	       cur_con_id = $(this).attr("id");
	       //console.log(cur_con_id)
	       final_h = 0;
	       $("#" + cur_con_id).find(".article-list__item").each(function(){
	          if($(this).find("h3").height() > final_h){
                     final_h = $(this).find("h3").height();
                  }
	       });
	       $("#" + cur_con_id + " .article-list__item h3").height(final_h);
	    });
	}
	else{
           $("." + item).each(function(){
              if($(this).find("h3").height() > final_h){
                 final_h = $(this).find("h3").height();
              }
           });
           $("." + item + " h3").height(final_h);
	}
    });
}

/*
function headersHandler(){
    let final_h;
    let divs_list = ['article-list__item', 'article__item', 'objects__list_item'];
    divs_list.forEach(function(item){
        final_h = 0;
        $("." + item).each(function(){
           if($(this).find("h3").height() > final_h){
              final_h = $(this).find("h3").height();
           }
        });
        $("." + item + " h3").height(final_h);
    });
}
*/
