function printr(str){
	if(typeof arguments.callee.print =="undefined"){
		arguments.callee.print=document.createElement("div");
		document.body.appendChild(arguments.callee.print);
	}
	arguments.callee.print.style.position="fixed";
	arguments.callee.print.style.top="20px";
	arguments.callee.print.style.right="20px";
	arguments.callee.print.style.wordWrap="break-word";
	arguments.callee.print.style.wordBreak="normal";
	arguments.callee.print.style.width="400px";
	arguments.callee.print.style.height="300px";
	arguments.callee.print.style.overflow="scroll";
	arguments.callee.print.innerHTML+=str+"***";
}