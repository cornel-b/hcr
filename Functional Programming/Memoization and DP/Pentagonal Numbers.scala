/*
https://www.hackerrank.com/challenges/pentagonal-numbers/problem
*/
import scala.io.StdIn

object Solution {

  def main(args: Array[String]): Unit = {

    def getPentagonal(n: Long): Long = {
      return n * (3*n-1) / 2;
    }
      
    val n = StdIn.readLine.trim.toInt
    for (i <- 1 to n) {
      println(getPentagonal(StdIn.readLine.trim.toLong))
    }
  }

}