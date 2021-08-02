<?php
function loading(){
?>
<style>
.cell{
color:black;
padding:10px;
border:solid black 1pt;
}
#table_game{
margin: 0 auto;
border-collapse: collapse;
}
</style>
<img id='img' src='https://www.princeton.edu/sites/default/files/styles/half_1x/public/images/2020/04/20090310_ConwayKochen_DJA_066-copy.jpg?itok=hg5rrQvx' width=175 style='position:absolute; margin: 0 auto; text-align:center; top:0; left:700px' >
<table id='table_game'>
<?php
$cells_in_column = 40;
for ($i=0; $i<40; $i++){	
	echo "<tr>";	
	for ($j=0; $j<$cells_in_column; $j++){
		echo "<td id='l$i c$j' class='cell' onmousedown='manual(this);' ></td>";		
	}
	echo "</tr>";
}
?>
</table>
<input type='hidden' id='blackblue' value='0' >
</body>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" >

function rip(){
//J
grid[9][0]=1;
grid[9][1]=1;
grid[9][2]=1;
grid[10][2]=1;
grid[11][2]=1;
grid[12][2]=1;
grid[13][2]=1;
grid[14][2]=1;
grid[14][1]=1;
grid[14][0]=1;
grid[13][0]=1;

//o
grid[12][4]=1;
grid[12][5]=1;
grid[12][6]=1;
grid[13][6]=1;
grid[14][6]=1;
grid[14][5]=1;
grid[14][4]=1;
grid[13][4]=1;

//h
grid[10][8]=1;
grid[11][8]=1;
grid[12][8]=1;
grid[13][8]=1;
grid[14][8]=1;
grid[12][9]=1;
grid[12][10]=1;
grid[13][10]=1;
grid[14][10]=1;

//n
grid[14][12]=1;
grid[13][12]=1;
grid[12][12]=1;
grid[12][13]=1;
grid[12][14]=1;
grid[13][14]=1;
grid[14][14]=1;

//H
grid[10][17]=1;
grid[11][17]=1;
grid[12][17]=1;
grid[13][17]=1;
grid[14][17]=1;
grid[12][18]=1;
grid[12][19]=1;
grid[10][20]=1;
grid[11][20]=1;
grid[12][20]=1;
grid[13][20]=1;
grid[14][20]=1;

//o
grid[12][22]=1;
grid[12][23]=1;
grid[12][24]=1;
grid[13][24]=1;
grid[14][24]=1;
grid[14][23]=1;
grid[14][22]=1;
grid[13][22]=1;

//r
grid[14][26]=1;
grid[13][26]=1;
grid[12][26]=1;
grid[12][27]=1;
grid[12][28]=1;

//t
grid[11][30]=1;
grid[12][30]=1;
grid[13][30]=1;
grid[14][30]=1;
grid[12][31]=1;
grid[14][31]=1;

//o
grid[12][33]=1;
grid[12][34]=1;
grid[12][35]=1;
grid[13][35]=1;
grid[14][35]=1;
grid[14][34]=1;
grid[14][33]=1;
grid[13][33]=1;

//n
grid[14][37]=1;
grid[13][37]=1;
grid[12][37]=1;
grid[12][38]=1;
grid[12][39]=1;
grid[13][39]=1;
grid[14][39]=1;

//C
grid[17][5]=1;
grid[17][6]=1;
grid[17][7]=1;
grid[17][8]=1;
grid[18][5]=1;
grid[19][5]=1;
grid[20][5]=1;
grid[21][5]=1;
grid[21][6]=1;
grid[21][7]=1;
grid[21][8]=1;

//O
grid[17][10]=1;
grid[17][11]=1;
grid[17][12]=1;
grid[17][13]=1;
grid[18][13]=1;
grid[19][13]=1;
grid[20][13]=1;
grid[21][13]=1;
grid[21][12]=1;
grid[21][11]=1;
grid[21][10]=1;
grid[20][10]=1;
grid[19][10]=1;
grid[18][10]=1;

//N
grid[21][15]=1;
grid[20][15]=1;
grid[19][15]=1;
grid[18][15]=1;
grid[17][15]=1;
grid[17][16]=1;
grid[17][17]=1;
grid[17][18]=1;
grid[18][18]=1;
grid[19][18]=1;
grid[20][18]=1;
grid[21][18]=1;

//W
grid[17][20]=1;
grid[18][20]=1;
grid[19][20]=1;
grid[20][20]=1;
grid[21][20]=1;
grid[21][21]=1;
grid[20][22]=1;
grid[19][22]=1;
grid[18][22]=1;
grid[21][23]=1;
grid[21][24]=1;
grid[20][24]=1;
grid[19][24]=1;
grid[18][24]=1;
grid[17][24]=1;

//A
grid[17][26]=1;
grid[17][27]=1;
grid[17][28]=1;
grid[17][29]=1;
grid[18][29]=1;
grid[19][29]=1;
grid[20][29]=1;
grid[21][29]=1;
grid[21][28]=1;
grid[21][27]=1;
grid[21][26]=1;
grid[20][26]=1;
grid[19][26]=1;
grid[19][27]=1;
grid[19][28]=1;

//Y
grid[17][31]=1;
grid[18][31]=1;
grid[19][31]=1;
grid[19][32]=1;
grid[19][33]=1;
grid[17][34]=1;
grid[18][34]=1;
grid[19][34]=1;
grid[20][34]=1;
grid[21][34]=1;
grid[21][33]=1;
grid[21][32]=1;


//R
grid[24][13]=1;
grid[25][13]=1;
grid[26][13]=1;
grid[27][13]=1;
grid[28][13]=1;
grid[24][14]=1;
grid[24][15]=1;
grid[24][16]=1;
grid[25][16]=1;
grid[26][16]=1;
grid[26][15]=1;
grid[26][14]=1;
grid[27][15]=1;
grid[28][16]=1;

//I
grid[24][20]=1;
grid[25][20]=1;
grid[26][20]=1;
grid[27][20]=1;
grid[28][20]=1;

//P
grid[28][24]=1;
grid[27][24]=1;
grid[26][24]=1;
grid[25][24]=1;
grid[24][24]=1;
grid[24][25]=1;
grid[24][26]=1;
grid[24][27]=1;
grid[25][27]=1;
grid[26][27]=1;
grid[26][26]=1;
grid[26][25]=1;

//1
grid[31][3]=1;
grid[32][3]=1;
grid[33][3]=1;
grid[34][3]=1;
grid[35][3]=1;

//9
grid[35][5]=1;
grid[35][6]=1;
grid[35][7]=1;
grid[34][7]=1;
grid[33][7]=1;
grid[32][7]=1;
grid[31][7]=1;
grid[31][6]=1;
grid[31][5]=1;
grid[32][5]=1;
grid[33][5]=1;
grid[33][6]=1;


//3
grid[31][9]=1;
grid[31][10]=1;
grid[31][11]=1;
grid[32][11]=1;
grid[33][11]=1;
grid[34][11]=1;
grid[35][11]=1;
grid[35][10]=1;
grid[35][9]=1;
grid[33][10]=1;

//7
grid[31][13]=1;
grid[31][14]=1;
grid[31][15]=1;
grid[31][16]=1;
grid[32][16]=1;
grid[33][15]=1;
grid[34][14]=1;
grid[35][13]=1;

//-
grid[33][18]=1;
grid[33][19]=1;
grid[33][20]=1;


//2
grid[31][22]=1;
grid[31][23]=1;
grid[31][24]=1;
grid[32][24]=1;
grid[33][24]=1;
grid[33][23]=1;
grid[33][22]=1;
grid[34][22]=1;
grid[35][22]=1;
grid[35][23]=1;
grid[35][24]=1;

//0
grid[31][26]=1;
grid[32][26]=1;
grid[33][26]=1;
grid[34][26]=1;
grid[35][26]=1;
grid[33][26]=1;
grid[31][27]=1;
grid[35][27]=1;
grid[31][28]=1;
grid[32][28]=1;
grid[33][28]=1;
grid[34][28]=1;
grid[35][28]=1;

//2
grid[31][30]=1;
grid[31][31]=1;
grid[31][32]=1;
grid[32][32]=1;
grid[33][32]=1;
grid[33][31]=1;
grid[33][30]=1;
grid[34][30]=1;
grid[35][30]=1;
grid[35][31]=1;
grid[35][32]=1;

//0
grid[31][34]=1;
grid[32][34]=1;
grid[33][34]=1;
grid[34][34]=1;
grid[35][34]=1;
grid[33][34]=1;
grid[31][35]=1;
grid[35][35]=1;
grid[31][36]=1;
grid[32][36]=1;
grid[33][36]=1;
grid[34][36]=1;
grid[35][36]=1;
}
function manual(me){
		id=me.id;
		here=id.indexOf(" ");
		i=id.substring(1,here);
		j=id.substring(here+2);
		if (grid[i][j]==1)
			grid[i][j]=0;
		else
			grid[i][j]=1;
		filling();
}
function filling(){
	for(i=0;i<cells_in_column;i++){
		colonnes=document.getElementsByClassName("c"+i);			
		for(j=0;j<cells_in_column;j++){
			id= "l" + i + " c" + j ;
			if (grid[i][j]==1){				
				if (blackblue.value==0 || blackblue.value=='0'){
					document.getElementById(id).style="background-color:black";
				}
				else
					document.getElementById(id).style="background-color:blue";
			}else if (grid[i][j]==2)
				document.getElementById(id).style="background-color:green";
			else if (grid[i][j]==3)
				document.getElementById(id).style="background-color:red";
			else if (grid[i][j]==4)
				document.getElementById(id).style="background-color:yellow";				
			else
				document.getElementById(id).style="background-color:none";
		}
	}
}
function nb_cells_autour(x,y){
    nb=0;
    if (y-1>=0){
		if (grid[x][y-1]!=0)
			nb+=1;
	}
    if (y+1<cells_in_column){
		if (grid[x][y+1]!=0)
			nb+=1;
	}
    if (x-1>=0){
		if (grid[x-1][y]!=0)
			nb+=1;
	}
    if (x+1<cells_in_column){
		if (grid[x+1][y]!=0)
			nb+=1;
	}
    if (x-1>=0 && y-1>=0){
		if (grid[x-1][y-1]!=0)
			nb+=1;
	}
    if (x-1>=0 && y+1<cells_in_column){
		if (grid[x-1][y+1]!=0)
			nb+=1;
	}
    if (x+1<cells_in_column && y-1>=0){
		if (grid[x+1][y-1]!=0)
			nb+=1;
	}
    if (x+1<cells_in_column && y+1<cells_in_column){
		if (grid[x+1][y+1]!=0)
			nb+=1;
	}
    return nb;
}
function game(){
	grid_next = new Array(cells_in_column);
	grid_old = new Array(cells_in_column);
	for (i = 0; i < cells_in_column; i++){
		grid_old[i] = new Array(cells_in_column);
		grid_next[i] = new Array(cells_in_column);
	}		
	for (x = 0; x < cells_in_column; x++){
		for (y = 0; y < cells_in_column; y++){
			nb = nb_cells_autour(x,y);
			if (nb==3)
				grid_next[x][y]=2; // rule 1
			else if (nb==2)
				grid_next[x][y]=grid[x][y]; // rule 2
			else if (nb < 2 || nb > 3)
				grid_next[x][y]=0; // rule 3
		}
		
	}		
	for (i = 0; i < cells_in_column; i++){
		for (j = 0; j < cells_in_column; j++){
			grid_old[i][j]=grid[i][j];
			grid[i][j]=grid_next[i][j];
		}
	}
	couleurs();
	filling();
	setTimeout(game, 50);
}
function couleurs(){		
	for (x = 0; x < cells_in_column; x++){
		for (y = 0; y < cells_in_column; y++){
			nb = nb_cells_autour(x,y);
			if (grid[x][y]!=0){
				if (grid_old[x][y]==0 && grid[x][y]==2)
					grid_next[x][y]=2;
				else if (grid_old[x][y]==2 && grid[x][y]==2)
					grid_next[x][y]=1;
				else if ((nb < 2 || nb > 3) && grid[x][y]==2)
					grid_next[x][y]=4;
				else if (nb < 2 || nb > 3)
					grid_next[x][y]=3;
			}else{
				grid_next[x][y]==0;			
			}
		}
	}
	for (i = 0; i < cells_in_column; i++){
		for (j = 0; j < cells_in_column; j++){
			grid[i][j]=grid_next[i][j];
		}
	}
}
function reload(){
	img.hidden=true;
	if (Math.random()<=0.5){
		for (i = 0; i < cells_in_column; i++){
			for (j = 0; j < cells_in_column; j++){
				if (Math.random()<=0.6){
					grid[i][j]=1;
				}else{
					grid[i][j]=0;
				}
			}
		}
	}
	blackblue.value=1;
	filling();
	setTimeout(game, 50);
}
cells_in_column = 40;
var grid = new Array(cells_in_column);
for (i = 0; i < cells_in_column; i++){
	grid[i] = new Array(cells_in_column); 
	for (j = 0; j < cells_in_column; j++){
		grid[i][j]=0;
	}
}
rip();
filling();
setTimeout(reload, 2000); //milliseconds
</script>
</html>
<?php
}
?>