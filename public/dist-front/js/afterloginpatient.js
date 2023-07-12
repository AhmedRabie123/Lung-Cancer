function toggleDiv(divId) {
        const div = document.getElementById(divId);
        if (div.style.display === "none") {
          div.style.display = "block";
        } else {
          div.style.display = "none";
        }
 };
function DisplayXlsxFile(){
  var link = document.getElementById('open-xlsx');
  var container = document.getElementById('table-container');

  link.addEventListener('click', function(event) {
    event.preventDefault();

    var req = new XMLHttpRequest();
    req.open('GET', link.href, true);
    req.responseType = 'arraybuffer';
    req.onload = function() {
      var data = new Uint8Array(req.response);
      var workbook = XLSX.read(data, {type: 'array'});
      var sheetName = workbook.SheetNames[0];
      var worksheet = workbook.Sheets[sheetName];
      var htmlTable = XLSX.utils.sheet_to_html(worksheet);

      container.innerHTML = htmlTable;
    };
    req.send();
  });
}
