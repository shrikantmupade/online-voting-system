#include <stdio.h>
#include <conio.h>
#include <string.h>
#include <stdlib.h>


// hashTable[i] stores all characters that correspond to
// digit i in phone
const char hashTable[10][5] = {"", "", "abc", "def", "ghi",
                               "jkl", "mno", "pqrs", "tuv", "wxyz"};

// A recursive function to print all possible words that can
// be obtained by input number[] of size n.  The output
// words are one by one stored in output[]
void printWordsUtil(int number[], int curr_digit,
                    char output[], int n)
{
    // Base case, if current output word is prepared
    int i;
    textcolor(YELLOW); 
    if (curr_digit == n)
    {   
        printf("%s ", output);
        usleep(100000); 
        return;
    }

    // Try all 3 possible characters for current digit in
    // number[] and recur for remaining digits
    for (i = 0; i < strlen(hashTable[number[curr_digit]]);
         i++)
    {
        output[curr_digit] = hashTable[number[curr_digit]][i];
        printWordsUtil(number, curr_digit + 1, output, n);
        if (number[curr_digit] == 0 || number[curr_digit] == 1)
            return;
    }
}

// A wrapper over printWordsUtil().  It creates an output
// array and calls printWordsUtil()
void printWords(int number[], int n)
{
    char result[] = {};
    result[n] = '\0';
    printWordsUtil(number, 0, result, n);
}

// Driver program
int main(void)
{  
    int m;
    int number[10];
    textcolor(GREEN);
    system("CLS"); 
    printf("Enter the number of digits : ");
    scanf("%d", &m);
    textcolor(GREEN);
    printf("\nEnter the digits on the keypad : ");
    for (int i = 0; i < m; i++)
    {
        scanf("%d", &number[i]);
    }
    system("CLS"); 
    // int n = sizeof(number) / sizeof(number[0]);
    printWords(number, m);

    printf("\n\n\n"); 
    return 0;
}
