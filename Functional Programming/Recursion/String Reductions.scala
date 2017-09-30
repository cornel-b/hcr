/*
String Reductions
https://www.hackerrank.com/challenges/string-reductions/problem
*/

object Solution {

  def main(args: Array[String]) {
    val n = readLine().trim().split("").distinct.mkString("")
    println(n)
  }
}