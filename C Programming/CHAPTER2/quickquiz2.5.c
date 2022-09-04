#include<stdio.h>
#include<conio.h>
int main()
{
int num1,num2,num3;

printf("enter your number");
scanf("%d",&num1);

printf("enter your number");
scanf("%d",&num2);

printf("enter your number");
scanf("%d",&num3);
if(num1>num2 && num1>num3)
{
    printf("The greatest number is = %d",num1);
}
else if(num2>num3 && num2>num1)
{
    printf("The greatest number is = %d",num2);
}
else if(num3>num1 && num3>num2)
{
 printf("The greatest number is = %d",num3);
}
else
{
    printf("Your all numbers are equal");
}
getch();
}
