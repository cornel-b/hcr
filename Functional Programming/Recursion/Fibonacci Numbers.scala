object Solution {
    
    def fibonacci(x:Int): Int = {
      fibs(x-1)
    }

    def fibs(x: Int): Int = {
      if (x <= 0) return 0
      if (x == 1) return 1
      return fibs(x-1) + fibs(x-2)
    }

    def main(args: Array[String]) {
      println(fibonacci(readInt()))
    }

}