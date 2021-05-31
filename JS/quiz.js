function estimate() {
	var form = document.getElementById("test");
	var answer1 = document.getElementsByName("ans1");
	var answer2 = document.getElementsByName("ans2");
	var answer3 = document.getElementsByName("ans3");
	var answer4 = document.getElementsByName("ans4");
	var answer5 = document.getElementsByName("ans5");
	var answer6 = document.getElementsByName("ans6");
	var answer7 = document.getElementsByName("ans7");
	
	var result = 0;
	var score = {"never": 0, "rarely": 1, "sometimes": 2, "often": 3, "voften": 4};
	var disp = document.getElementById("res");
	var l = document.getElementById("little");
	var mi = document.getElementById("mild");
	var mod = document.getElementById("moderate");
	var h = document.getElementById("high");
	
	for(var i = 0; i < answer1.length; i++) {
		var ans = answer1[i];
		if(ans.checked) {
			result += score[ans.value];
		}
	}
	for(var i = 0; i < answer2.length; i++) {
		var ans = answer2[i];
		if(ans.checked) {
			result += score[ans.value];
		}
	}
	for(var i = 0; i < answer3.length; i++) {
		var ans = answer3[i];
		if(ans.checked) {
			result += score[ans.value];
		}
	}
	for(var i = 0; i < answer4.length; i++) {
		var ans = answer4[i];
		if(ans.checked) {
			result += score[ans.value];
		}
	}
	for(var i = 0; i < answer5.length; i++) {
		var ans = answer5[i];
		if(ans.checked) {
			result += score[ans.value];
		}
	}
	for(var i = 0; i < answer6.length; i++) {
		var ans = answer6[i];
		if(ans.checked) {
			result += score[ans.value];
		}
	}
	for(var i = 0; i < answer7.length; i++) {
		var ans = answer7[i];
		if(ans.checked) {
			result += score[ans.value];
		}
	}
	
	if(result >= 0 && result <= 7) {
		l.style.display = "block";
	}
	if(result >= 8 && result <= 14) {
		mi.style.display = "block";
	}
	if(result >= 15 && result <= 21) {
		mod.style.display = "block";
	}
	if(result >= 22 && result <= 28) {
		h.style.display = "block";
	}
	disp.style.display = "block";
	test.style.display = "none";
}