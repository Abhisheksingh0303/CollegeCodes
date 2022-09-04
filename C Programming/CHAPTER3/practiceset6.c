#include<stdio.h>
#include<conio.h>
int main()
//8x1 table style
{
int i=1,sum=0,n;
printf("enter your number");
scanf("%d",&n);
while(i<=n){
    sum=8*i;
i++;
}
  printf("the value of 1 to 10 value is %d ",sum);

getch();
}

