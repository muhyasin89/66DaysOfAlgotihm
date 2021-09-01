import java.lang.ref.Cleaner;
import java.lang.reflect.Array;
import java.util.*;

public class ListClass {

    public static void main(String args[]) {
        String str_a = "Hello World";
        // String[] str_a1 = { "Hello World" };
        // String[][] str_a11 = { { "Hello" }, { "Word" } };
        Integer int_a = 12345;
        String str_int_a = String.valueOf(int_a);

        System.out.println(str_a);
        System.out.println(int_a);
        // System.out.println(Arrays.toString(str_a1));
        // System.out.println(Arrays.deepToString(str_a11));

        ArrayList<Character> list_str_a = new ArrayList<Character>();
        ArrayList<Integer> list_int_a = new ArrayList<Integer>();

        for (int i = 0; i < str_a.length(); i++) {
            list_str_a.add(str_a.charAt(i));
        }
        list_str_a.remove(5);
        System.out.println(list_str_a);

        for (int i = 0; i < str_int_a.length(); i++) {
            list_int_a.add(Character.getNumericValue(str_int_a.charAt(i)));
        }

        System.out.println(list_int_a);

        Collections.swap(list_str_a, 4, 5);
        System.out.println(list_str_a);

        Integer size_a = list_str_a.size();

        ArrayList<Character> left = new ArrayList<Character>(list_str_a.subList(0, (size_a + 1) / 2));
        ArrayList<Character> right = new ArrayList<Character>(list_str_a.subList((size_a + 1) / 2, size_a - 1));

        System.out.println(left);
        System.out.println(right);
    }
}