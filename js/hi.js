function run(){
document.getElementsByTagName('html').id = "hi";
}
run();
let height;
const sendPostMessage = () => {
    var height = document.getElementById('hi').offsetHeight;
    window.parent.postMessage({
      frameHeight: height
    }, '*');
    console.log(height); // check the message is being sent correctly
  };
window.onload = () => sendPostMessage();
window.onresize = () => sendPostMessage();