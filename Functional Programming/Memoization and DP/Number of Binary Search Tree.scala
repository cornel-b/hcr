/*
https://www.hackerrank.com/challenges/number-of-binary-search-tree/problem
*/
import scala.io.StdIn

object Solution {

  def main (args: Array[String]) {
    for (i <- 1 to StdIn.readLine.toInt) {
      println(catalan(StdIn.readLine.toInt) % 100000007)
    }
  }

  def factorial(n: BigInt) = BigInt(1).to(n).foldLeft(BigInt(1))(_ * _)
  def catalan(n: BigInt) = factorial(2 * n) / (factorial(n + 1) * factorial(n))
}
