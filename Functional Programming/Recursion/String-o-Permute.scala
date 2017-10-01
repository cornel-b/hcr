/*
https://www.hackerrank.com/challenges/string-o-permute/problem
*/

import scala.io.StdIn

object Solution {

  def main(args: Array[String]): Unit = {

    for (i <- 1 to StdIn.readLine().toInt) {
      println(invrt(StdIn.readLine().toList).mkString(""))
    }
  }

  def invrt(string: List[Char]): List[Char] = {
    if (string.isEmpty) List()
    else {
      string(1) :: string(0) :: invrt(string.drop(2))
    }
  }

}