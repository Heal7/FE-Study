var num = 3;//默认九宫格
$(document).ready(function(){
	initPuzzle();//生成表格
	initNumber();//从服务器获取乱序排列的数据并显示
	$("button").click(reset);//绑定重置按钮点击事件的响应函数
});
//自定义表格，并绑定单元点击事件
//先清空原有表格，再重新添加
function initPuzzle(){
	$("table").empty();//清空table所有子元素
	for(var row = 0;row < num; row++){
		$("<tr></tr>").appendTo("table");//添加行
	}
	for(var col = 0; col < num; col++){
		$("<td></td>").appendTo("tr");//添加列
	}
	$("td").click(tdClicked);
}

//从服务器获取乱序排列的数据并显示
function initNumber(){
	$.post("initNum.php",{num : num},function(data,status){
		if(status == "success"){
			if(data == "dataIllegal"){
				alert("请输入数字n且2<n<10");
			}else{
				var randomNum = eval(data);
				for(var i = 0; i < num*num; i++){
					if(randomNum[i] == 0){
						$("td").eq(i).text("").addClass("zero");
					}else{
						$("td").eq(i).text(randomNum[i]).removeClass("zero");
					}
				}
			}
		}
	});
}

//重置按钮点击事件的响应函数
//若输入非法，提示并返回，若输入为空或当前维度，重置数据，若输入合法且非当前维度，重置表格
var reset = function(){
	var numSet = $(".num").val();//用户输入的行列数
	if(!numSet){
		numSet = num;
	}else if(!isValid(numSet)){
		alert("请输入数字n且2<n<10");
		return;
	}
	if(numSet != num){
		num = parseInt(numSet);
		initPuzzle();
	}
	initNumber();
}

//验证输入是否为3-9的数字
function isValid(input){
	var reg = new RegExp("^[2-9]*$");
	return reg.test(input);
}

//键盘事件响应函数
//若为“上下左右”键，寻找将要移动的单元格，若存在，移动单元格
$(document).keydown(function(event){
	var k = event.keyCode;
	if( k > 36 && k < 41){//判断是否为方向键
		var zeroIndex = $("td").index($(".zero"));
		var direction = (k == 40)?1:k-35;//左：k=37 direction=2;上：k=38 direction=3;右：k=39 direction=4;下：k=40 direction=1;
		var surIndex = getSurround(zeroIndex,direction);
		if(typeof surIndex!=="undefined"){
			exchange(surIndex,zeroIndex);
		}
	}
});

//单元格点击事件
//获取被点击的单元格四周的单元格，若有用单元格，移动
var tdClicked = function(){
	var index = $("td").index($(this));//点击的单元格在表格中的序号
	for(var i=1; i<5; i++){
		var surIndex = getSurround(index,i);
		if(typeof surIndex !== "undefined"){
			if($("td").eq(surIndex).hasClass("zero")){
				exchange(index,surIndex);
				return;
			}
		}
	}
}

//获取某一方向单元格的序号
//index:当前单元格在表格中的序号  direction:方向
function getSurround(index,direction){
	switch(direction){
		case 1://上
			if(index > num-1){
				return index-num;
			}
			break;
		case 2://右
			if(index % num ！！== num-1){
				return index+1;
			}
			break;
		case 3://下
		        if (index < num * num - num) {
		            return index + num;
		        }
		        break;
		case 4://左
	        if (index % num !== 0) {
	            return index - 1;
	        }
		    break;
	}
}

//交换两单元格的内容，并判断游戏是否获胜
function exchange(index,indexZero){
	var indexText = $("td").eq(index).text();
	$("td").eq(index).text("").addClass("zero");
	$("td").eq(indexZero).text(indexText).removeClass("zero");
	isWin();
}
//判断游戏是否获胜
function isWin(){
	var zeroIndex = $("td").index($(".zero"));
	if(zeroIndex === num*num-1){
		var rank = $("td").text();
		var rankWin = "1";
		for(var i=2; i<num*num; i++){
			var rankWin = rankWin + i;
		}
		if(rank === rankWin){
			alert("恭喜你成功了！");
			initNumber();
		}
	}
}