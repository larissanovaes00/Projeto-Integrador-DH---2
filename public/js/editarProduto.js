$(".btn-delete").click(function(e) {
  e.preventDefault();
  let self = this;
  $.ajax({
    url: $(this).attr("href"),
    type: "GET",
    success: function(data) {
      console.log(data);
      if (data.ok) {
        let cnt = $(self).parent(".img-cnt");
        console.log(cnt);
        let cnt2 = $(cnt).siblings(".img-cnt-add");
        console.log(cnt2);
        $(cnt).hide();
        $(cnt2).show();
      }
    }
  });
});
