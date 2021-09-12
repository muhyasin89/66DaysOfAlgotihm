string1 = "abba"
str1 = "dog cat cat dog"
# result True

string2 = "abba"
str2 = "dog cat cat fish"
# return False


def areFollowingPatterns(strings, patterns):
    list_str = list(strings)
    list_pattern = patterns.split(" ")
    hash_map = {}

    if len(list_str) != len(list_pattern):
        return False
    for i in range(len(list_str)):
        if list_str[i] not in hash_map.keys():
            hash_map[list_str[i]] = list_pattern[i]
        else:
            if hash_map[list_str[i]] != list_pattern[i]:
                return False

    return True


print(areFollowingPatterns(string1, str1))
print(areFollowingPatterns(string2, str2))
