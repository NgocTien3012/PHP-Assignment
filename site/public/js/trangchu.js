var anh = [
  "../site/public/img/banner.jpg",
  "../site/public/img/banner1.jpg",
  "../site/public/img/banner2.jpg",
];
var index = 0;
function prev() {
  index--;
  if (index < 0) index = anh.length - 1;
  document.getElementById("anh").src = anh[index];
}
function next() {
  index++;
  if (index == anh.length) index = 0;
  document.getElementById("anh").src = anh[index];
}
setInterval(next, 8000);
