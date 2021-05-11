var BG = document.createElement("div");

function addElement() {
    var BG = document.createElement("div");
    //BG.style.background-color = 'black';
    BG.style.width = '100%';
    BG.style.height = '100%';
    BG.style.background = 'black';
    BG.style.position = 'fixed';
    BG.style.top = '0';
    BG.style.left = '0';
    BG.style.opacity = '0.9';
    BG.style.display = 'none';
    BG.setAttribute("id", "bgcover");
    
    // add the newly created elements and its content into the DOM 
    document.body.appendChild(BG);
    let newDiv = document.getElementById("for-js");
    document.body.insertBefore(newDiv, BG);
    let landingpageText = document.getElementById("landing");
    landingpageText.style.opacity = '0.1';

    // open popup onload
    showPopup();
  }

function showPopup(msg, myYes) {
    var confirmBox = $("#confirm");
    confirmBox.find(".message").text(msg); 
    confirmBox.find(".yes").unbind().click(function() {
       confirmBox.hide();
    });
    confirmBox.find(".yes").click(myYes);
    confirmBox.show();
 }

function refreshPage() {
    location.reload(); 
}
