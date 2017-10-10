/*
https://www.hackerrank.com/challenges/fibonacci-fp/problem
*/

import scala.io.StdIn
import scala.math.BigInt

object Solution {
  def main(args: Array[String]): Unit = {

    lazy val fibs: Stream[BigInt] = BigInt(0) #::
      BigInt(1) #::
      fibs.zip(fibs.tail).map { n => n._1 + n._2 }

    val n = StdIn.readLine.trim.toLong
    for (i <- 1 to n.toInt) {
      println(fibs(StdIn.readLine.trim.toInt) % 100000007)
    }
  }

}