package main

import "fmt"

func main() {
    // Declare a variable to store input
    var input string

    // Read input from stdin
    fmt.Scan(&input)

    // Print Hello, World. on the first line
    fmt.Println("Hello, World.")

    // Print the contents of the variable on the second line
    fmt.Println(input)
}
