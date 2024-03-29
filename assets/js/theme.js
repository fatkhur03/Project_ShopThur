"use strict";
!(function () {
  if (
    ($(".dropdown-menu a.dropdown-toggle").length &&
      $(".dropdown-menu a.dropdown-toggle").on("click", function (e) {
        return (
          $(this).next().hasClass("show") ||
            $(this)
              .parents(".dropdown-menu")
              .first()
              .find(".show")
              .removeClass("show"),
          $(this).next(".dropdown-menu").toggleClass("show"),
          $(this)
            .parents("li.nav-item.dropdown.show")
            .on("hidden.bs.dropdown", function (e) {
              $(".dropdown-submenu .show").removeClass("show");
            }),
          !1
        );
      }),
    $('[data-bs-toggle="tooltip"]').length)
  )
    [].slice
      .call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
      .map(function (e) {
        return new bootstrap.Tooltip(e);
      });
  if ($('[data-bs-toggle="popover"]').length)
    [].slice
      .call(document.querySelectorAll('[data-bs-toggle="popover"]'))
      .map(function (e) {
        return new bootstrap.Popover(e);
      });
  if ($("#rater").length)
    raterJs({
      starSize: 20,
      element: document.querySelector("#rater"),
      rateCallback: function (e, t) {
        this.setRating(e), t();
      },
    });
  if ($("#rate-2").length)
    raterJs({
      starSize: 20,
      element: document.querySelector("#rate-2"),
      rateCallback: function (e, t) {
        this.setRating(e), t();
      },
    });
  if ($("#rate-3").length)
    raterJs({
      starSize: 20,
      element: document.querySelector("#rate-3"),
      rateCallback: function (e, t) {
        this.setRating(e), t();
      },
    });
  if ($("#rate-4").length)
    raterJs({
      starSize: 20,
      element: document.querySelector("#rate-4"),
      rateCallback: function (e, t) {
        this.setRating(e), t();
      },
    });
  if (
    ($(".sidebar-nav-fixed a").length &&
      $(".sidebar-nav-fixed a").on("click", function (e) {
        if (
          location.pathname.replace(/^\//, "") ==
            this.pathname.replace(/^\//, "") &&
          location.hostname == this.hostname
        ) {
          var t = $(this.hash);
          (t = t.length ? t : $("[name=" + this.hash.slice(1) + "]")).length &&
            (e.preventDefault(),
            $("html, body").animate(
              { scrollTop: t.offset().top - 90 },
              1e3,
              function () {
                var e = $(t);
                if ((e.focus(), e.is(":focus"))) return !1;
                e.attr("tabindex", "-1"), e.focus();
              }
            ));
        }
        $(".sidebar-nav-fixed a").each(function () {
          $(this).removeClass("active");
        }),
          $(this).addClass("active");
      }),
    $(".flatpickr").length && flatpickr(".flatpickr", { disableMobile: !0 }),
    $(".stopevent").length &&
      $(document).on("click.bs.collapse.data-api", ".stopevent", function (e) {
        e.stopPropagation();
      }),
    $("#checkAll").length &&
      $("#checkAll").on("click", function () {
        $("input:checkbox").not(this).prop("checked", this.checked);
      }),
    $("#liveAlertPlaceholder").length)
  ) {
    const e = document.getElementById("liveAlertPlaceholder"),
      t = (t, n) => {
        const a = document.createElement("div");
        (a.innerHTML = [
          `<div class="alert alert-${n} alert-dismissible" role="alert">`,
          `   <div>${t}</div>`,
          '   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>',
          "</div>",
        ].join("")),
          e.append(a);
      },
      n = document.getElementById("liveAlertBtn");
    n &&
      n.addEventListener("click", () => {
        t("Nice, you triggered this alert message!", "success");
      });
  }
  if ($("#priceRange").length) {
    var e = document.getElementById("priceRange");
    noUiSlider.create(e, {
      connect: !0,
      behaviour: "tap",
      start: [49, 199],
      range: { min: [6], max: [300] },
      format: wNumb({ decimals: 1, thousand: ".", prefix: "$" }),
    });
    var t = document.getElementById("priceRange-value");
    e.noUiSlider.on("update", function (e) {
      t.innerHTML = e.join(" - ");
    });
  }
  $(".file-input").length &&
    $(".file-input").change(function () {
      var e = $(this).parent().parent().find(".image");
      console.log(e);
      var t = new FileReader();
      (t.onload = function (t) {
        e.attr("src", t.target.result);
      }),
        t.readAsDataURL(this.files[0]);
    });
})();
