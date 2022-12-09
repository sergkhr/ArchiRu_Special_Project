let article_list_containers = [
    ["article-list__container", "article-list", "article-list__item"], 
    ["article-grid-list__container", "article-grid-list", "article-grid-list__item"]
];

let containers_rows = [];

$(document).click(function(){
    block_height_update(1);
    //setTimeout(function(){imageWidthUpdateGrid();}, 1000);
});

$(document).ready(function(){
    $(".faq__item").slice(0, 4).show();
    $(".details__button IMG").on("click", function(e){
        e.preventDefault();
        $(".faq__item:hidden").slice(0, 4).slideDown();
        if($(".faq__item:hidden").length === 0){
           $(".details__button IMG").text("").addClass("noContent");
        }
    });
    // define_records_rows();
    setTimeout(function(){define_records_rows();}, 600);
    article_list_containers.forEach(function(el){
        $("." + el[1] + " .details__button").click(function(){show_hidden_records(1, this);});
    });
    // $(".article-list .details__button").click(function(){show_hidden_records();});
    $(".objects__container .details__button").click(function(){show_hidden_records(2, this);});

    $(".glossary__list_item").click(function(e){ // Click on glossary item not only on title
        if(e.target === this || $(e.target).hasClass("glossary_title")){ //so it works only if click on title (with padding of parent) and not content 
            $(".glossary__content").css({"display":"none"});
            $(".glossary__list_item").removeClass("opened");
            $(this).find(".glossary__content").css({"display":"block"});
            $(this).addClass("opened"); //to maintain hover state while opened
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
    let win_width, els_hidden = 0, con_width, row_width = 0, row_count = 0;
    const EL_MARGIN = 20;
    
    /////////////////////////////////////////////////////////////////////////////
    // Rows in .article-grid-list containers handle in imageWidthUpdateGrid(). //
    /////////////////////////////////////////////////////////////////////////////

    ///////////////////////////////////////////////////////////////
    // Showing records' first rows in block FAQ by a given count //
    // but others rows do hide.                                  //
    ///////////////////////////////////////////////////////////////
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
    ////////////////////////////////////////////////////////////////////////////////////////
    // Showing records' first rows in block articles design with circles by a given count //
    // but others rows do hide.                                                           //
    ////////////////////////////////////////////////////////////////////////////////////////
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

function show_hidden_records(rec_type=1, cur_b){
    if(rec_type===1){
        $(cur_b).closest(".article-grid-list").find(".article-grid-list__container").find(".article-grid-list__item:hidden").show();
        $(cur_b).closest(".article-grid-list").find(".details__button, .details__link").hide();
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
    $(".article-list__container .article-list__item img").each(function(container_key){
        img_width = $(this)[0].naturalWidth;
        img_height = $(this)[0].naturalHeight; 
        $(this).width(img_width);
        $(this).height(img_height);
        $(this).closest(".article-list__item").width(img_width);
    });
    imageWidthUpdateGridReset();
    setTimeout(function(){define_records_rows();}, 1500);
    setTimeout(function(){imageWidthUpdateGrid();}, 1000);
    if($(".glossary__content.glossary1:visible").length){
        glossary_content_choose_position($(".glossary__content.glossary1:visible").first());
    }
};

$(window).load(function(){
    setTimeout(function(){imageWidthUpdateGrid();}, 1000);
});

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
        $(".faq__item").css({"padding-bottom":""});
        $(".faq__item").removeClass("faq_active");
        $(".faq__item_content").css({"margin-top":""});
        if($(".faq__item_content:visible").length){
            let content_margin_top = 80;
            el_margin_bottom = $(".faq__item_content:visible").height() + content_margin_top;
            $(".faq__item_content:visible").first().css({"margin-top":"" + content_margin_top + "px"});
            $(".faq__item_content:visible").closest(".faq__item").css({"padding-bottom":"" + el_margin_bottom + "px"});
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
            // Updating header's height in defined line.
	    $("." + item).each(function(){
	       cur_con_id = $(this).attr("id");
	       final_h = 0;
               con_width = $("#" + cur_con_id).find(".article-list__container").width();
               imgs_row_width = 0;
               headers = [];
               lines = [];
               $("#" + cur_con_id).find(".article-list__container .article-list__item").each(function(fi){
                  cur_rec_width = $(this).width();
                  imgs_row_width += cur_rec_width;
                  headers.push($(this).find("h3").height());
                  if(imgs_row_width >= con_width){
                      lines.push(fi);
                      imgs_row_width = 0;                      
                  }
	       });
               line_pre = 0;
               lines.forEach(function(line){
                   for(i = line_pre; i < line; i++){
                       headers_slice = headers.slice(line_pre, line);
                       max_height = Math.max.apply(null, headers_slice);
                       $("#" + cur_con_id + " .article-list__item:eq(" + i + ") h3").height(max_height);
                   }
                   line_pre = line;
               });
               if(line_pre < headers.length){
                   lines.length > 1 ? line_pre_s = line_pre-1 : line_pre_s = line_pre;
                   headers_slice = headers.slice(line_pre_s, headers.length);
                   max_height = Math.max.apply(null, headers_slice);
                   for(i=line_pre_s; i<headers.length; i++){
                       $("#" + cur_con_id + " .article-list__item:eq(" + i + ") h3").height(max_height);
                   }
               }
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


function imageWidthUpdateGrid(){
    //////////////////////////////////////////////////////
    // Spreadind images in article-grid-list__container //
    // depending screen resolution.                     //
    //////////////////////////////////////////////////////
    $(".article-grid-list__container").each(function(){
        $(this).css({"grid-template-columns":""});
        $(this).css({"margin-left": ""});
        $(this).css({"margin-right": ""});
        $(this).find(".article-grid-list__item").each(function(){
            $(this).css({"margin":""});
        });
    });
    let window_width = $(window).width();
    $(".article-grid-list__container").each(function(global_con_index){
        parent_id = $(this).closest(".article-grid-list").attr("id");
        containers_rows.push(parent_id);
        containers_rows[parent_id] = [];
        col_width = $(this).width();
        repeat_item = (Math.round(col_width / 300) * 2);
        let column_width = 2 * $(this).width() / repeat_item;
        common_img_width = 0;
        column_width_orig = $(this).width();
        $(this).css({"grid-template-columns":"repeat(" + repeat_item + ", 1fr)"});
        $(this).css({"margin": "0 " + (column_width / 30) + "px"});
        img_types_row = [];
        img_types_row_for_handler = [];
        con_length = $(this).find(".article-grid-list__item").length;
        fraction_sum = 0;
        row = 1;
        $(this).find(".article-grid-list__item").each(function(index){
            $(this).css({"margin-left":"" + (column_width / 30) + "px"}); //base img width is 280px and margin is 20px, 
            //so column_width is 300px and margin is 300/30 = 10px, but it's two margins, so in sum 20px
            $(this).css({"margin-right":"" + (column_width / 30) + "px"});
            common_img_width += $(this).width();
            cur_img_width = $(this).find("img").width();
            cur_img_height = $(this).find("img").height();
            cur_img_width===cur_img_height ? img_type = 2 : img_type = 4;
            img_types_row.push([img_type, cur_img_width]);
            img_types_row_for_handler.push([img_type, cur_img_width, index]); // row with next column
            fraction_sum += img_type;
            if(fraction_sum >= repeat_item){
                containers_rows[parent_id].push([row, index]);
                imageWidthUpdateGridStep2(img_types_row_for_handler, global_con_index, repeat_item);
                row++;
                fraction_sum = 0;
                img_types_row = [];
                img_types_row_for_handler = [];
                common_img_width = 0;
            }
        });
    });
    ///////////////////////////////////////////////////////////
    // Showing records' first rows in block by a given count //
    // but others ones do hide.                              //
    ///////////////////////////////////////////////////////////
    $(".article-grid-list .details__button, .article-grid-list .details__link").hide();
    containers_rows.forEach(function(container){
        img_count = $("#" + container + " .article-grid-list__item").length;
        allowed_rows = eval("allowed_rows_" + container);
        if(containers_rows[container].length > (allowed_rows-1)){
           end_visible_img_index = containers_rows[container][allowed_rows-1][1];
           $("#" + container + " .article-grid-list__item:gt(" + end_visible_img_index + ")").hide();
           if(img_count > end_visible_img_index){
               $("#" + container + " .details__button, #" + container + " .details__link").show();
           }
        }
    });
}

function imageWidthUpdateGridStep2(img_types_row_for_handler, global_con_index, repeat_item){
    const IMG_WIDTH_ALT = "430x280";
    let changed_fr = [];
    let final_fr_sum = 0;
    let regexp = "//i.archi.ru/news/main_images/([^/]*)/(.+)";
    shift = 0;
    
   
    //////////////////////////////////////
    // First step of transformation.    //
    // Change 4fr to 3fr.               //
    // 2fr stay without transformation. //
    //////////////////////////////////////
    while(final_fr_sum!==repeat_item){
        final_fr_sum = 0;
        changed_fr = [];
        img_types_row_for_handler.forEach(function(cur_r, i){
            if(final_fr_sum < repeat_item){
                if(cur_r[0]===2){
                    final_fr_sum+=cur_r[0];
                    changed_fr.push([cur_r[2], cur_r[0], 2, 0]);
                }
                else{
                    if(i<(img_types_row_for_handler.length - shift)){
                        final_fr_sum+=3;
                        changed_fr.push([cur_r[2], cur_r[0], 3, 1]);
                    }
                    else{
                        final_fr_sum+=cur_r[0];
                        changed_fr.push([cur_r[2], cur_r[0], cur_r[0], 0]);
                    }
                }
            }
            else{
                changed_fr.push([cur_r[2], cur_r[0], cur_r[0]]);
            }
        });
        shift++;
        if(shift > 8){break;}
    };
    
    ////////////////////////////////////
    // Second step of transformation. //
    // Change 4fr to 2fr.             //
    // Change path in 2fr images.     //
    ////////////////////////////////////
    if(final_fr_sum > repeat_item){
        final_fr_sum = 0;
        shift = 0;
        while(final_fr_sum!==repeat_item){
                final_fr_sum = 0;
                changed_fr = [];
                img_types_row_for_handler.forEach(function(cur_r, i){
                    if(final_fr_sum < repeat_item){
                        if(cur_r[0]===2){
                            final_fr_sum+=cur_r[0];
                            changed_fr.push([cur_r[2], cur_r[0], 2, 1]);
                        }
                        else{
                            final_fr_sum+=2;
                            changed_fr.push([cur_r[2], cur_r[0], 2, 1]);
                        }
                    }
                    else{
                        changed_fr.push([cur_r[2], cur_r[0], cur_r[0], 0]);
                    }
                });
                shift++;
                if(shift > 8){break;}
            };
       
    }

    
    changed_fr.forEach(function(item, i){
        old_fr = item[1];
        new_fr = item[2];
        square_change_path = item[3]; 
        if(new_fr!==old_fr){
            $(".article-grid-list__container").eq(global_con_index).find(".article-grid-list__item").eq(item[0]).css({"grid-column":"span " + new_fr});
            img_cur_src = $(".article-grid-list__container").eq(global_con_index).find(".article-grid-list__item").eq(item[0]).find("img").attr("src");
            matches = img_cur_src.match(regexp);
            image_cur = matches[2];
            cur_image_new_src = "//i.archi.ru/news/main_images/" + IMG_WIDTH_ALT + "/" + image_cur;
            img_cur_src = $(".article-grid-list__container").eq(global_con_index).find(".article-grid-list__item").eq(item[0]).find("img").attr("src", cur_image_new_src);
        }
        else if(new_fr===old_fr && square_change_path===1){
            // Change path in 2fr images.
            img_cur_src = $(".article-grid-list__container").eq(global_con_index).find(".article-grid-list__item").eq(item[0]).find("img").attr("src");
            matches = img_cur_src.match(regexp);
            image_cur = matches[2];
            cur_image_new_src = "//i.archi.ru/news/main_images/" + IMG_WIDTH_ALT + "/" + image_cur;
            img_cur_src = $(".article-grid-list__container").eq(global_con_index).find(".article-grid-list__item").eq(item[0]).find("img").attr("src", cur_image_new_src);
        };
    });
    return 1;
}

function imageWidthUpdateGridReset(){
    let regexp = "//i.archi.ru/news/main_images/([^/]*)/(.+)";
    let img_has_rectangle_class;
    $(".article-grid-list__container").each(function(global_con_index){
      $(this).find(".article-grid-list__item").each(function(index){
	 $(this).removeAttr("style");
      });
      $(this).find("img").each(function(){
         img_cur_src = $(this).attr("src");
	 if(img_cur_src.indexOf("430x280")!==-1){
            img_has_rectangle_class = $(this).closest(".article-grid-list__item").hasClass("rectangle");
	    matches = img_cur_src.match(regexp);
            image_cur = matches[2];
            if(img_has_rectangle_class===false){
                cur_image_new_src = "//i.archi.ru/news/main_images/280x280/" + image_cur;
            }
            else{
                cur_image_new_src = "//i.archi.ru/news/main_images/580x280/" + image_cur;
            }
            $(this).attr("src", cur_image_new_src);
	    
	 }
      });
   });
}
