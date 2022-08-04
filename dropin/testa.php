<!DOCTYPE html>
<html lang=de>
<meta charset=UTF-8>
<title>Document</title>
<textarea id=myText></textarea>
<button id=copyNow>Copy</button>
<script>
myText.onblur = el=mytext =>{
myText.select();
myText.setSelectionRange(0, 99999)
document.execCommand("copy")}

copyNow.onclick = el=mytext =>{
myText.select();
myText.setSelectionRange(0, 99999)
document.execCommand("copy")}
</script>