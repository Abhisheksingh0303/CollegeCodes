#include<stdio.h>
#include<conio.h>
int main()
{
 int i,num;
printf("enter your value");
scanf("%d",&num);
for(i=1;i<=10;i++)
{
    printf("%d*%d=%d\n",num,i,(num*i));
}

getch();
}
