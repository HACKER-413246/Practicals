import socket

def whois_query(domain):
    server = "whois.iana.org"
    port = 43                


    with socket.socket(socket.AF_INET, socket.SOCK_STREAM) as s:
        s.connect((server, port))
        query = domain + "\r\n"
        s.send(query.encode("utf-8"))


        response = b""
        while True:
            data = s.recv(4096)
            if not data:
                break
            response += data


    return response.decode("utf-8")

if __name__ == "__main__":
    domain = input("Enter the domain name : ")
    result = whois_query(domain)
    print("WHOIS Data:\n")
    print(result)

