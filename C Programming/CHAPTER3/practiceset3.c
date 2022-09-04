#include<stdio.h>
#include<conio.h>
int main()
{
//using for loop
int i,sum=0,n;
printf("enter your number");
scanf("%d",&n);
for(i=0;i<=n;i++)
{
 sum+=i;
}
  printf("the value of 1 to 10 value is %d ",sum);

getch();
}
