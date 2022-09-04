#include<stdio.h>
#include<conio.h>
int main()
{
 int i=0;
 int n;
 printf("enter the number");
 scanf("%d",&n);
 do{
    printf("%d\n",i+1);
    i++;
 }while(i<n);

getch();
}
