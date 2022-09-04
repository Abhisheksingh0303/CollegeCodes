#include<stdio.h>
#include<conio.h>
int main()
{
 int marks;
 printf("please enter your marks");
 scanf("%d",&marks);
 if(marks>=90)
 {
     printf("grade A");
 }

  else if(marks>=80)
 {
     printf("grade B");
 }

  else if(marks>=60)
 {
     printf("grade D");
 }

    else
  {
      printf("fail");
  }

getch();
}
