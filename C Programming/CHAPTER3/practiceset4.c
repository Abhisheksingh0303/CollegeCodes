#include<stdio.h>
#include<conio.h>
int main()
//using while loop
{
int i=1,sum=0,n;
printf("enter your number");
scanf("%d",&n);
while(i<=n){
    sum+=i;
i++;
}
  printf("the value of 1 to 10 value is %d ",sum);

getch();
}
