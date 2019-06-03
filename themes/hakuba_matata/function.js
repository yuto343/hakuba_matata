$(document).ready(function(){
  //page animation
    anime.timeline({
      easing:'easeOutExpo',
    })
    .add({
      targets:'.main_contents',
      translateX:[-1000,0]
    })
    .add({
      targets:'.top_posts',
      translateX:[-1000,0]
    },'-=700')
    .add({
      targets:'.recent_posts',
      translateX:[-1000,0]
    },'-=700')
    .add({
      targets:'.footer',
      translateX:[-1000,0]
    },'-=700')
    .add({
     targets:'.category',
     translateX:[500,0]
    },'-=400');
    // sectionにid連番付与
    let i = 1
    let id = "number"
    $('.single_page_content').children('section').attr("id", _ => id + i++);
    // mkjにid付与

})
