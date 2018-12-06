$(document).ready(() => {
  $("#photo-prod").hover(
    function() {
      $(this).css({ marginTop: "60px", display: "inline-block" });
    },
    function() {
      $(this)
        .find("span:last")
        .remove();
    }
  );
});
