/*
https://www.hackerrank.com/challenges/pascals-triangle/problem
*/


object Solution {

  def pascalTriangle(n: Int) = {

    for (k <- 0 to n - 1) {
      pascalTriangleLine(k, n)
    }

  }

  def pascalTriangleLine(k: Int, n: Int) = {
    for (r <- 0 to k) {
      var div = (fact(r) * fact(k - r))
      if (div == 0) print("1 ")
      else {
        print((fact(k) / div) + " ")
      }
    }
    println
  }

  def fact(n: Int): Int = {
    if (n == 0) return 0
    if (n == 1) return 1
    return fact(n-1) * n
  }

  def main(args: Array[String]) {
    val n = readLine().trim().toInt
    pascalTriangle(n)
  }
}