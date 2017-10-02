object Solution {

  def main(args: Array[String]) {
    val n = readLine().trim().split("").distinct.mkString("")
    println(n)
  }
}