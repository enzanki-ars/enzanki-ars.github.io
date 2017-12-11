---
---

function loadSuccess() {
  document.getElementById("blockedInfo").innerHTML = "<span class=\"label label-info\">"
  + "YouTube Access Check Succeeded.</span>";
  var image_x = document.getElementById("blockedImage");
  image_x.parentNode.removeChild(image_x);
  ga("send", "event", "YouTube Success", "YouTube Load Success");
}

function loadError(site) {
  document.getElementById("blockedInfo").innerHTML = "<div class=\"alert alert-danger\" role=\"alert\">"
  + "<strong>" + site + " Blocked: </strong>You seem to be accessing this website from a location where "
  + site + " is blocked. As part of this website uses items from " + site + ", "
  + "please contact your network administrator in order to view this website as intended.</div>";
  var image_x = document.getElementById("blockedImage");
  image_x.parentNode.removeChild(image_x);
  ga("send", "event", "YouTube Error", "YouTube Load Error");
}

// Code below is modified from http://stackoverflow.com/a/38118591/6820516

function calcSpeed(speed) {
// Time = Distance/Speed
  var spanSelector = document.querySelectorAll('.marquee p'),i;
  for (i = 0; i < spanSelector.length; i++) {
    var spanLength = spanSelector[i].offsetWidth;
    var timeTaken = spanLength / speed;
    spanSelector[i].style.animationDuration = timeTaken + "s";
  }
}

// End modified code.

$(window).on("load", function() {
  //Fix for header scroll http://stackoverflow.com/a/25887125/6820516
  var elements = document.querySelectorAll('input,select,textarea');
  var invalidListener = function(){ this.scrollIntoView(false); };

  for(var i = elements.length; i--;)
      elements[i].addEventListener('invalid', invalidListener);

  $("time.timeago").timeago();
  $.timeago.settings.allowFuture = true;

  $("[data-toggle=\"tooltip\"]").tooltip();
  calcSpeed(75);
});

// Code below is modified from http://codepen.io/ashblue/pen/mCtuA/

var $TABLE = $('#table');

$('.table-add').click(function () {
  var $clone = $TABLE.find('tr.hide').clone(true).removeClass('hide table-line');
  $TABLE.find('table').append($clone);
});

$('.table-remove').click(function () {
  $(this).parents('tr').detach();
});

// A few jQuery helpers for exporting only
jQuery.fn.pop = [].pop;
jQuery.fn.shift = [].shift;

function dataexport() {
  var $rows = $TABLE.find('tr:not(:hidden)');
  var headers = [];
  var data = "score:\n";

  // Get the headers (add special header logic here)
  $($rows.shift()).find('th:not(:empty)').each(function () {
    headers.push($(this).text().toLowerCase());
  });

  // Turn all existing rows into a loopable array
  $rows.each(function () {
    var $td = $(this).find('td');

    // Use the headers from earlier to name our hash keys
    headers.forEach(function (header, i) {
      if (header == "team") {
        data += "  - team: " + $td.eq(i).text() + "\n";
      } else if (header == "points") {
        data += "    points: " + $td.eq(i).text() + "\n";
      }
    });
  });

  console.log(data);

  // Output the result
  if (data=="score:\n") {
    return "";
  } else {
    return data;
  }
};


// End code modified from http://codepen.io/ashblue/pen/mCtuA/

function submit(type, values) {
  var filename = encodeURIComponent("_" + type + "s/"
    + moment(document.getElementById("date").value).format("YYYY-MM-DD")
    + "-" + getSlug(document.getElementById("title").value) + ".md");

  var content = "---\nenabled: true\n";
  $.each(values, function( index, value ) {
    if (value == "date") {
      content += value + ": " + moment(document.getElementById("date").value)
        .format("YYYY-MM-DD hh:MM A") + "\n";
    } else if (value == "score") {
      content += dataexport();
    } else if (document.getElementById(value).value) {
      content += value + ": " + document.getElementById(value).value + "\n";
    }
  });
  content += "---\n"

  content = encodeURIComponent(content);

  message = encodeURIComponent("[New " + type + "] "
    + moment(document.getElementById("date").value).format("YYYY-MM-DD")
    + "-" + document.getElementById("title").value);
  description = encodeURIComponent("Submitted via " + window.location.href);
  window.location.href = "{{ site.github.repository_url }}/new/master?filename=" + filename
    + "&value=" + content + "&message=" + message
    + "&description=" + description;
}
