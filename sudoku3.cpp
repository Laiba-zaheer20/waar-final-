#include<iostream>
#include<cmath>
using namespace std;

int board[9][9]={
  8,5,6,0,1,4,7,3,0,
  0,9,0,0,0,0,0,0,0,
  2,4,0,0,0,0,1,6,0,
  0,6,2,0,5,9,3,0,0,
  0,3,1,8,0,2,4,5,0,
  0,0,5,3,4,0,9,2,0,
  0,2,4,0,0,0,0,7,3,
  0,0,0,0,0,0,0,1,0,
  0,1,8,6,3,0,2,9,4,
};

bool rows(int board[][9],int row,int col,int k){
	for(int i=0;i<9;i++){
	if(board[row][i]==k)
		  return 0;
   }
   return 1;
}

bool columns(int board[][9],int row,int col,int k){
	 for(int j=0;j<9;j++){
		if(board[j][col]==k)
		  return 0;
	
   }
   return 1;
}


bool rowCol(int board[][9],int row,int col,int k){
	int r=ceil((row+1)/3.);
    int c=ceil((col+1)/3.);
    for(int g=(r-1)*3;g<(r-1)*3+3;g++){
    	for(int h=(c-1)*3;h<(c-1)*3+3;h++){
    		if(board[g][h]==k){
    			return 0;
			}
		}
	}
   return 1;
    

}

int sudoku(int board[][9],int row,int col){

	if(col== 9){
		col=0;
		++row;
		cout<<"kk "<<row<<"kkkk "<<col<<endl;
		
	}
	
	if(row == 9){
		cout<<"hey1"<<endl;
	 return 1;
	}
	if(board[row][col] != 0){
	 
	   return true;
}
			
	for(int k=1;k<=9;k++){
	   if(rows(board,row,col,k) && columns(board,row,col,k) && rowCol(board,row,col,k)){
			board[row][col]=k;
			if(sudoku(board,row,col++)){
				return 1;
			}
		    board[row][col]=0;
		}
		}
		
		return 0;
}
	


int main(){
   cout<<sudoku(board,0,0)<<endl;
   for(int i=0;i<9;i++){
   	for(int j=0;j<9;j++){
   		cout<<board[i][j]<<" ";
   		
	   }
	   cout<<endl;
   }	
}
