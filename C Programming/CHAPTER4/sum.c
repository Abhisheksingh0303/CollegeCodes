#include<stdio.h>
#include<conio.h>
int sum(int a, int b);
int main()
{
    int c;
 c=sum(10,20);
 printf("the result is %d",c);
getch();
}
int sum(int a, int b)
{
 int result;
 result=a+b;
 return result;
}
