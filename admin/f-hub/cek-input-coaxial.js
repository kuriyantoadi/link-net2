function validasi() {
  var x = document.forms["input"]["optical_input_node"].value;
  if (x == null || x == "") {
    alert("Optical Input Node	Tidak Boleh Kosong");
    return false;
  }
  var x = document.forms["input"]["optical_ac"].value;
  if (x == null || x == "") {
    alert("Optical AC Tidak Boleh Kosong");
    return false;
  }
  var x = document.forms["input"]["optical_dc"].value;
  if (x == null || x == "") {
    alert("Optical DC Tidak Boleh Kosong");
    return false;
  }
  var x = document.forms["input"]["signal_input_low"].value;
  if (x == null || x == "") {
    alert("Signal Input Low Tidak Boleh Kosong");
    return false;
  }
  var x = document.forms["input"]["signal_input_high"].value;
  if (x == null || x == "") {
    alert("Signal Input High Tidak Boleh Kosong");
    return false;
  }
  var x = document.forms["input"]["signal_output_low"].value;
  if (x == null || x == "") {
    alert("Signal Output Low Normal Tidak Boleh Kosong");
    return false;
  }
  var x = document.forms["input"]["signal_output_high"].value;
  if (x == null || x == "") {
    alert("Signal Output High Tidak Boleh Kosong");
    return false;
  }
  var x = document.forms["input"]["signal_output_rev"].value;
  if (x == null || x == "") {
    alert("Signal Output Rev Tidak Boleh Kosong");
    return false;
  }
  var x = document.forms["input"]["docsis_dp"].value;
  if (x == null || x == "") {
    alert("Docsis DP Tidak Boleh Kosong");
    return false;
  }
  var x = document.forms["input"]["docsis_up"].value;
  if (x == null || x == "") {
    alert("Docsis UP Tidak Boleh Kosong");
    return false;
  }
  var x = document.forms["input"]["docsis_ds"].value;
  if (x == null || x == "") {
    alert("Docsis DS Tidak Boleh Kosong");
    return false;
  }
  var x = document.forms["input"]["quality_mer"].value;
  if (x == null || x == "") {
    alert("Quality Mer Tidak Boleh Kosong");
    return false;
  }
  var x = document.forms["input"]["quality_ber"].value;
  if (x == null || x == "") {
    alert("quality_ber Tidak Boleh Kosong");
    return false;
  }
  var x = document.forms["input"]["quality_cn"].value;
  if (x == null || x == "") {
    alert("Quality CN Tidak Boleh Kosong");
    return false;
  }
  var x = document.forms["input"]["pic"].value;
  if (x == null || x == "") {
    alert("PIC Tidak Boleh Kosong");
    return false;
  }
}
