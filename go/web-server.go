// Learn Go in 3 hours
// Section 2, Video 1
// Our First Go Program
package main

import (
	"io"
	"log"
	"net/http"
)

/*
	All Go programs start running from a function called `main` in a package called `main`
*/
func main() {
	/*
		helloHandler := func(rw http.ResponseWriter, req *http.Request) {
			name := req.URL.Query().Get("name")
			text := fmt.Sprintf("Hello, %s", name)
			log.Fatal(io.WriteString(rw,text))
		}
	*/
	indexHandler := func(rw http.ResponseWriter, req *http.Request) {
		log.Fatal(io.WriteString(rw, "Hello, world !!!"))
	}

	http.HandleFunc("/", indexHandler)
	//	http.HandleFunc("/hello", helloHandler)
	log.Fatal(http.ListenAndServe(":8080", nil))
}
