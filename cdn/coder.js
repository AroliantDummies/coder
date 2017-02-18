function code (mtools) {
if(mtools=='enc')
var task='encode';
else
var task='decode';
var data=ecoder.elements["toEncode"].value;var tool=ecoder.elements["toolSelect"].value;
ecoder.elements["codedData"].value = '';
$.ajax({
url: 'coder.php',type: 'POST',
data: {data: data,task: task, tool : tool},
success: function(msg) {
if(msg=='e')
alert('Data error');
else
ecoder.elements["codedData"].value = msg;
},
error: function(msg) {alert('Internet Connection Error');}
});
}
