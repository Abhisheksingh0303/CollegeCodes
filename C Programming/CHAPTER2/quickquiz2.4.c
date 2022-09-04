#include<stdio.h>
#include<conio.h>
int main()
{
  char ch;
  printf("enter the character");
  scanf("%c",&ch);
  if(ch>=97 && ch<=122)
  {

      printf("your character %c is lowercase",ch);
  }
  else
  {
      printf("your character is %c is uppercase",ch);
  }

    getch();
}
