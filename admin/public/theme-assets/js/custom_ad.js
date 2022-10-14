const btn_select_all = document.querySelector(".btn-selectALl");
const btn_deselect_all = document.querySelector(".btn-de-selectALl");
// select dom
var ele = document.querySelectorAll('input[type="checkbox"]');

function toggle(source) {
    var checkboxes = document.querySelectorAll('input[type="checkbox"]');
    for (var i = 0; i < checkboxes.length; i++) {
        if (checkboxes[i] != source)
            checkboxes[i].checked = source.checked;
    }
}

btn_select_all.onclick = () => {
  for (var i = 0; i < ele.length; i++) {
    if (ele[i].type == "checkbox") ele[i].checked = true;
  }
};

btn_deselect_all.onclick = () => {
  for (var i = 0; i < ele.length; i++) {
    if (ele[i].type == "checkbox") ele[i].checked = false;
  }
};

function checkdata() {
  let eles = [];
  let row_tr = document.getElementsByTagName("tr");
  for (var i = 0; i < ele.length; i++) {
    if (ele[i].checked == true) {
      eles.push(i);
    }
  }

  let id = [];
  let output_ele = null;
  let result = null;

  // if(ele.length == eles.length){
  // }else {
  //         eles.forEach((a) => {
  //           output_ele = row_tr[a].children[1].childNodes[1].innerText;
  //           result = output_ele.slice(1);
  //           id.push(result);
  //         });
  // }
  for (var i = 1; i < eles.length; i++) {
    output_ele = row_tr[eles[i]].children[1].childNodes[1].innerText;
    result = output_ele.slice(1);
    id.push(result);
    }
  console.log(id);

  return id.join();

}
