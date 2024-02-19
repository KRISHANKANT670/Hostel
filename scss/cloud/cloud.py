def count_words_starting_with_a_ending_with_z(book_text):
    # Tokenize the book text into words
    words = book_text.split()

    # Initialize a count variable
    count = 0

    # Iterate through the words and check the criteria
    for word in words:
        # Convert the word to lowercase for case-insensitive comparison
        lowercased_word = word.lower()
        if lowercased_word.startswith('a') and lowercased_word.endswith('z'):
            count += 1

    return count

# Replace 'book_text' with the actual content of your book
book_text = "A sample book text with some words starting with A and ending with Z."

result = count_words_starting_with_a_ending_with_z(book_text)
print("Number of words starting with 'A' and ending with 'Z':", result)
