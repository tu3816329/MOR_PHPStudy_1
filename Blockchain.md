# BLOCKCHAN RESEARCH
## A. BLOCKCHAIN
### 1. Blockchain là gì?
- Blockchain là một công nghệ truyền tải dữ liệu một cách an toàn, bảo mật dựa trên hệ thống mã hóa phức tạp
- Xét về mặt thiết kế business, blockchain có thể được gọi là một cuốn sổ kế toán phân tán (distributed ledger), hay một cơ sở dữ liệu chứa đựng tài sản, một cấu trúc dữ liệu dùng để ghi chép lại các lịch sử giao dịch (transaction) tài sản giữa các thành viên trong hệ thống mạng ngang hàng.
#### Các đặc trưng về công nghệ của block chain
- Blockchain sử dụng kết hợp các công nghệ sau:
	- Mật mã học (Encryption-hash): ***public key*** và ***private key***
	- Mạng lưới ngang hàng (decentralize network): ***P2P***, mỗi máy 1 client và ngượi lại
	- Lý thuyết trò chơi : Các nguyên lý đồng thuận như ***POW - Proof of work***,***POS - Proof Of State***
#### Các thành phần chính của một mạng lưới blockchain
##### Blockchain Network
- Một mạng lưới phân tán được hình thành thông qua việc các người dùng kết nối với nhau ,sử dụng phương thức **P2P**, mà tại mỗi máy lưu trữ một bảng sao chép của dữ liệu trong mạng lưới và các giao dịch được lưu trữ theo phương thức của blockchain.
##### Asset & Cryptocurrency:
- Asset là một dạng tài sản ảo được lưu trữ trên mạng lưới blockchain. Asset có thể là cổ phần của 1 dự án hay một công ty.Giả sử như cổ phiếu của công ty Apple, hầu hết mọi người chỉ nắm giữ trên giấy tờ nhưng thực tế không nắm giữ tài sản, và để chuyển nhượng hay bán cần có một bên thứ ba đứng ra tổ chức.Tuy nhiên, asset ở blockchain là một tài sản ảo và có thể được chuyển nhượng bất cứ lúc nào cho bất kỳ người nào.
- Cryptocurrency hay còn gọi là đồng tiền ảo, là một dạng của asset. Ví dụ cụ thể như đồng Bitcoin
##### Transaction:
- Transaction còn được gọi là một giao dịch tài sản (asset) giữa các cá nhân trên mạng lưới blockchain. 
##### Nodes:
- Một node là một thiết bị điện tử có khả năng kết nối với blockchain sử dụng internet. Thiết bị có thể là một điên thoại thông minh, một máy tính hay thậm chí là một máy in, fax ... miễn thiết bị có tồn tại một địa chỉ IP.
- Mỗi node có một cặp khóa ***public key*** và ***private key***.
- Vai trò của một node là hỗ trợ mạng lưới blockchain bằng cách giữ một bảng sao chép của mạng lưới blockchain, chủ của node sẵn sàng đóng góp tài nguyên của máy để tiến hành lưu trữ và xác thực các giao dịch và bằng cách đó kiếm được tiền ảo (còn gọi là đào blockchain)
##### Blocks:
- Một khối (block) nắm giữ một danh sách các giao dịch đã được mã hóa (hash) và thêm vào trong cây Merkle
- Mỗi block nắm giữ một chuỗi mã hóa id của block trước trong blockchain, kết nối 2 block với nhau. Liên kết này giữa các block tạo thành 1 chuỗi (chain) kéo dài đến block khởi tạo ban đầu (genesis block)
- Thời gian của block là thời gian trung bình sử dụng để khởi tạo một block vào blockchain
##### Timestamp
- Kiểu dữ liệu timestamp đóng vai trò rất quan trọng trong blockchain.
- Timestamp được lưu trữ trong block. Thông qua timestamp, có thể xác định được block được thêm theo một chuỗi thời gian hợp lý, đồng thời xác định thời gian cụ  thể giao dịch được thêm vào hệ thống, ngăn chặn một số lỗi như  (**Double Spending**) và cũng là một giá trị tạo sự đa dạng cho hash block
- Timestamp ngoài ra còn được sử dụng để xác định độ khó (difficulty) để đào block. Không có blockchain, một node sẽ không thể biết được độ khó của việc đào do không xác định được thời gian sẽ tốn để đào 1 block.
##### Decentralization
**Khuyết điểm của hệ thống lưu trữ hiện tại (Centralized Database & Distributed Database)**
###### Cơ sở dữ liệu tập trung (**Centralized Database**)

![Centralized Database](https://i.ibb.co/4NCS3KJ/image.png)

- Các dữ liệu được tiến hành lưu trữ tại duy nhất một địa điểm nhất định. Các hạn chế hiện tại bao gồm:
	- Dựa trên yếu tố kết nối mạng, khi kết nối chậm sẽ tốn thời gian để truy cập dữ liệu.
	- Tình trạng nghẽn dữ liệu (bottlenecks) có thể xảy ra với lượng truy cập lớn
	- Hạn chế truy cập đối với nhiều cá nhân trên cùng một tập dữ liệu. Có thể dẫn đến việc suy giảm đáng kể của hệ thống
	- Nếu không thiết kế chống chịu lỗi, khi có lỗi xảy ra có thể dẫn đến mất hết toàn bộ dữ liệu
	- Do lưu trữ tại 1 vị trí và hạn chế dư thừa dữ liệu, khi xảy ra mất dữ liệu sẽ rất khó để khôi phục. Trong đa số trường hợp, yêu cầu phải thực hiện bằng tay (manually).
###### Cơ sở dữ liệu phân tán (**Distributed Database**)
![Centralized Database](https://cointelegraph.com/storage/uploads/view/2e1a3fe53c4db2089242e2d6a56eea95.jpg)
- Các dữ liệu được lưu trữ tại **một cơ sở dữ liệu** (database) trên một nhóm các máy tính,server,... nằm ở cùng một vị trí vật lý hoặc qua một nhóm máy tính kết nối qua mạng lưới giao tiếp dữ liệu (data communication network). Thiết kế cho phép người dùng truy suất và lưu trữ dữ liệu một cách phân tách ở các máy tính, sử dụng cơ chế *replication* và *duplication* để đảm bảo các cơ sở dữ liệu luôn được cập nhật mới nhất. Các hạn chế hiên tại của thiết kế bao gồm:
	-	Tính phức tạp: Tính phức tạp của hệ thống tăng với việc đảm bảo hệ thống tường minh, giữ kết nối với các hệ thống khác nhau, tăng mức thiết kế với việc mất kết nối của database
	-	Tăng chi phí với việc tăng của sự phức tạp trong hệ thống về mặt nhân công,..
	-	Bảo mật: Tính bảo mật đối với các mảng database phân tán cũng phải cao để đảm bảo tính bảo mật của hệ thống cao
	-	Khó để giữ được tính toàn vẹn cho toàn bộ hệ thống với việc mảng dữ liệu phân tán
	-	Thiết kế phức tạp hơn
	-	Yêu cầu các phần mềm phụ hỗ trợ
	-	Thiếu công cụ để chuyển đổi từ 1 database tập trung sang phân tán
	-	Kiểm soát đồng thời là một vấn đề lớn, cần được xử lí sử dụng timestamp và locking
	-	Truy cập dữ liệu phân tán

###### Cơ sở dữ liệu phi tập trung (**Decentralized Database**)

![Centralized Database](https://cointelegraph.com/storage/uploads/view/ec8d6456c57a29be684992fe93eeec5e.jpg)

- Blockchain sử dụng thiết kế cơ sở dữ liệu phi tập trung để lưu trữ các thông tin của hệ thống (**Decentralized Database**) 
- Một cơ sở dữ liệu phi tập trung lưu trữ dữ liệu trên các máy khác nhau về mặt vật lí được kết nối với nhau mà tại đó lưu trữ một bảng sao chép database của mạng lưới.
- Thông qua việc lưu trữ dữ liệu xuyên mạng lưới P2P, blockchain loại bỏ được các bất lợi của việc dữ liệu lưu trữ tập trung tại 1 database
- Phương pháp bảo mật của blockchain bao gồm việc sử dụng mã hóa khóa mở (**public-key cryptography**). Trong đó khóa mở (**public-key**) đóng vai trò là một địa chỉ trên blockchain. Token giá trị được gửi trên mạng lưới sẽ được lưu lại dưới địa chỉ đó. Khóa đóng (**private-key**) đóng vai trò là mật khẩu đưa cho người dùng để quản lý các tài sản của họ. Khóa đóng được dùng để lấy khóa mở qua các công thức toán học biến đổi với hàm băm tạo thành một địa chỉ mà ai cũng thấy được.
- Mỗi node lưu trữ một bảng sao của blockchain. Chất lượng dữ liệu được đảm bảo thông qua việc trùng lặp rất nhiều cơ sở dữ liệu. Giao dịch được báo lên trên mạng lưới qua phần mềm, các node đào các giao dịch và thêm vào block rồi gửi block đó vào chuỗi và đến các node khác.
##### Smart Contract
- Hợp đồng thông minh (smart contract) là các chương trình được lưu trữ trên blockchain mà qua đó, một giao dịch giữa hai đối tượng có thể thực thi tuân thủ theo các điều lệ qui định trên hợp đồng bán phần hoặc hoàn toàn tự động mà không cần một tổ chức thứ ba để thực hiện
#### Một số đặc trưng của blockchain:
- Blockchain có một số đặc trưng sau:
	- Tính tường minh (Transparency)
	- Tính đồng thuận (Concensus)
	- Tính bất biến (Immutability)
	- Tính phi tập trung dữ liệu (Decentralized)
	- Tính bảo mật mã hóa (Cryptographic security)
### 2. Nguyên lý hoạt động của blockchain:
Để hiểu rõ phần này, ta sẽ lấy mạng lưới Bitcoin làm ví dụ cụ thể.
##### Nguyên lý mã hóa
- Với các đặc tính kĩ thuật, sổ kế toán ở blockchain có một số điểm đặc trưng khác biệt:
	- Trên blockchain, tất cả mọi người đều thấy được tất cả giao dịch trong khi hệ thống ngân hàng thuần túy chỉ có cá nhân đó mới thấy được giao dịch của chính mình (Tính tường minh)
	- Mạng lưới blockchain là mạng lưới phân tán không tồn tại bên thứ ba đóng vai trò xử lí giao dịch
	- Hệ thống blockchain được thiết kế theo cách không yêu cầu sự tin cậy và đảm bảo được sự tin cậy thông qua các thuật toán mã hóa đặc biệt (hàm hash -> cryptography)
- Đặc trưng của hàm hash đó là một hàm toán học đặc biệt tại mỗi giá trị sinh ra một mã với mỗi thuật băm tương ứng. Đó là hàm một chiều và gần như bất khả thi để dịch ngược lại giá trị đầu vào.
###### Public-key & Private-key
![Keys](https://i.ibb.co/m8p9mvs/key.png)


Ví dụ:
 
Trên hình, David gửi Sandra 5 bitcoin. Thông tin đó sẽ được dùng với private key tạo thành 1 mã đã kí và đăng lên mạng lưới cùng public key. Một người dùng có thể lấy public key của David để đọc mã đã gửi và xem thông tin của giao dịch
##### Quy tắc sổ cái
- Mỗi nút (**node**) của blockchain đều lưu trữ bản san của sổ cái. Do vậy mỗi nút đều biết số dư tài khoản của bạn là bao nhiêu. Hệ thống blockchain không theo dõi số dư của tài khoản mà nó chỉ ghi lại các giao dịch được yêu cầu

![Keys](https://i.ibb.co/RPwvV3T/image.png)

![Keys](https://i.ibb.co/rFftDh2/image.png)

- Các nút sẽ kiểm tra tất cả giao dịch trước đó có liên quan đến ví điện tử mà bạn sử dụng để gửi bitcoin thông qua các tham chiếu lịch sử giao dịch. Để đơn giản hóa và tăng tốc quá trình xác minh, một bản ghi đặc biệt lưu trữ số Bitcoin chưa được dùng sễ được các nút mạng ghi lại. Nhờ cơ chế kiểm tra này nên các ví tiền điện tử tránh được tình trạng chi tiêu đúp giao dịch (**double spending**)
- Vậy sở hữu Bitcoin có nghĩa là có các giao dịch được lưu trong sổ kế toán liên hệ đến địa chỉ ví của bạn mà chưa được sử dụng làm giao dịch đầu vào

##### Cơ chế của block và xác minh transaction
- Vấn đề được đặt ra là làm cách nào mạng lưới đã biết giao dịch nào được yêu cầu trước? Việc đặt giao dịch bằng một dấu mốc thời gian (**timestamp**) vẫn không an toàn do nó có thể bị giả mạo (Đặt theo locale của máy trong lúc đăng tải transaction có thể bị thay đổi). Do đó không có một cách cụ thể để biết liệu một giao dịch đã xảy ra trước một giao dịch khác và điều đó tạo ra được khả năng gian lận.
- Nếu điều trên xảy ra, sẽ có sự bất đồng bộ giữa các nút trong mạng lưới liên quan đến thứ tự giao dịch mà mỗi nút nhận được. Chính vị vậy, hệ thống blockchain được thiết kế để tạo sự đồng thuận ở tất cả các nút trong các giao dịch được yêu cầu và ngăn chặn hành vi gian lận ở trên.

![Verify blocks & transaction](https://i.ibb.co/1sLXLKL/image.png)

- Mạng lưới Blockchain sắp xếp các giao dịch bằng cách nhóm chúng lại vào các nhóm được gọi là một khối (block), mỗi khối chứa một số các giao dịch nhất định và một liên kết đến khối trước đó. Như vậy thời gian các khối sẽ luôn liên tiếp nối đuôi nhau và kết quả là các khối trước được tổ chức thành 1 chuỗi và từ đó tên hệ thống là Blockchain

##### Nguyên lý tạo khối

- Các giao dịch sau khi được gửi lên mạng lưới blockchain sẽ được nhóm vào một khối. Các giao dịch trong cùng một khối được coi là xảy ra cùng một lúc và các giao dịch chưa được thực hiện trong một khối được coi là chưa được xác nhận. Mỗi nút có thể nhóm các giao dịch với nhau thành một khối và gửi nó vào mạng lưới như một hàm ý cho các khối tiếp theo gắn vào đó
- Vì bất kỳ nút nào cũng có thể tạo thành 1 khối mới nên 1 vấn đề được đặt ra là hệ thống sẽ đồng thuận thế nào để xác định khối nào là khối tiếp theo
- Muốn thêm vào được trong blockchain, mỗi khối phải chứa một đoạn mã được tạo ra bằng thuật toán băm đóng vai trò như một đáp án cho một vấn đề toán học. Để tìm được đáp án này cần phải đoán các con số ngẫu nhiên mà khi ghép vào sẽ tạo thành một giá trị được định trước của hệ thống. Và trong mạng lưới luôn có một số lượng lớn các máy tính đều tập trung vào việc sinh ra dãy số này nên mạng lưới quy định mỗi khối được tạo ra sau một quãng thời gian (10p) một lần. Nút nào giải quyết trước sẽ được quyền gắn vào các khối dài nhất lên trên chuỗi và gửi nó tới toàn bộ mạng lưới (Nguyên lý đồng thuận Proof Of Work). Quá trình trên còn được gọi là **Mining** với blockchain.

![Proof of work](https://i.ibb.co/Bcbrh2q/image.png)
 
##### Thuật toán bảo mật của blockchain

- Mỗi khối của blockchain đều chứa một mã tham chiếu của khối trước đó và tham chiếu đó là một phần vấn đề toán học càn được giải quyết để truyền đến khối sau trong mạng lưới. Vì vậy rất khó để tính toán trước một loạt các khối bởi nó cần tính ra một số lượng lớn các số ngẫu nhiên cần thiết để giải quyết một khối và đặt nó trên blockchain
 
![Proof of work](https://i.ibb.co/X2HhqMD/image.png)
 
- Những khối đã được thêm vào chuỗi trong quá khứ bao giờ cũng an toàn hơn so với những khối mới được thêm vào. Bởi một khối được thêm vào chuỗi (trung bình cứ 10 phút một lần) trong khoảng 1 giờ kể từ khi giao dịch được nhóm vào trong khối đầu tiên của nó sẽ tạo ra một xác suất khá cao rằng giao dịch đã được xử lý và không thể đảo ngược.

### 3. Các loại blockchain
- **Public**: Bất kỳ ai cũng có quyền đọc và ghi dữ liệu trên Blockchain. Quá trình xác thực giao dịch trên Blockchain này đòi hỏi phải có hàng nghìn hay hàng vạn nút tham gia. Ví dụ: Bitcoin, Ethereum…
- **Private**: Người dùng chỉ được quyền đọc dữ liệu, không có quyền ghi vì điều này thuộc về bên tổ chức thứ ba tuyệt đối tin cậy. Tổ chức này có thể hoặc không cho phép người dùng đọc dữ liệu trong một số trường hợp. Bên thứ ba toàn quyền quyết định mọi thay đổi trên Blockchain. Vì đây là một Private Blockchain, cho nên thời gian xác nhận giao dịch khá nhanh vì chỉ cần một lượng nhỏ thiết bị tham gia xác thực giao dịch. Ví dụ: Ripple là một dạng Private Blockchain, hệ thống này cho phép 20% các nút là gian dối và chỉ cần 80% còn lại hoạt động ổn định là được.
- **Permissioned**: Hay còn gọi là Consortium, một dạng của Private nhưng bổ sung thêm một số tính năng nhất định, kết hợp giữa “niềm tin” khi tham gia vào Public và “niềm tin tuyệt đối” khi tham gia vào Private.

#### Các phiên bản của blockchain
- **Blockchain 1.0 – Tiền tệ và Thanh toán**: Ứng dụng chính của phiên bản này là tiền mã hoá: bao gồm việc chuyển đổi tiền tệ, kiều hối và tạo lập hệ thống thanh toán kỹ thuật số. Đây cũng là lĩnh vực quen thuộc với chúng ta nhất mà đôi khi khá nhiều người lầm tưởng Bitcoin và Blockchain là một.
- **Blockchain 2.0 – Tài chính và Thị trường**: Ứng dụng xử lý tài chính và ngân hàng: mở rộng quy mô của Blockchain, đưa vào các ứng dụng tài chính và thị trường. Các tài sản bao gồm cổ phiếu, chi phiếu, nợ, quyền sở hữu và bất kỳ điều gì có liên quan đến thỏa thuận hay hợp đồng.
- **Blockchain 3.0 – Thiết kế và Giám sát hoạt động**:  Đưa Blockchain vượt khỏi biên giới tài chính, và đi vào các lĩnh vực như giáo dục, chính phủ, y tế và nghệ thuật. Ở những lĩnh vực này sẽ là lại có nhiều loại như physical, digital hay human in nature.

### 4. Các cơ chế đồng thuận của block chain
###### Sau đây là một số cơ chế đồng thuận của blockchain
- **Proof of work** (Bằng chứng công việc): Phổ biến nhất của mô hình sử dụng giao thức này là bitcoin. Một người đào (**miner**) phải tiến hành giải quyết một bài toán băm của hệ thống (Ở bitcoin cụ thể là thuật toán Hashcash theo SHA-256) và người nhanh nhất sẽ được quyền thêm block vào trong chuỗi và nhận được đồng tiền (bitcoin). Mô hình này yêu cầu các dàn máy chuyên dụng và tiêu tốn một lượng lớn năng lượng
- **Proof Of Stake** (Bằng chứng cổ phần): Trong cơ chế đồng thuận PoS, các nút tiền hành đặt cọc một lượng đồng tiền vào một khối để tiến hành xác minh khối đó. Các nút đó còn được gọi là **Validator** và số đồng đặt cọc được gọi là **Stake**. **Stake** sẽ được hệ thống khóa, và mở khóa khi nút xin rút khỏi việc tham gia xác minh khối. Một node sẽ được lựa chọn ngẫu nhiên để trở thành người kiểm định và đóng gói khối, **Validator** tiến hành xác minh khối (thuật ngữ gọi là **FORGE** hay **MINT** để phân biệt với **MINE** của **PoW**). Nếu khối hợp lệ và ghi được vào chuỗi, nút đó sẽ được phần thưởng từ các khoảng phí giao dịch ( transaction fee). Sản phẩm đầu tiên sử dụng **PoS** là Peercoin. Phân cấp ít hơn và tiêu hao ít hơn **PoW**, không dễ bị đe dọa
- **Delegated Proof Of Stake** (Ủy quyền cổ phần): Phổ biến trong Steemit, EOS, Bitshares, chi phí giao dịch rẻ, có khả năng mở rộng, hiệu suất năng lượng cao. Tuy nhiên vẫn một phần hơi hướng tập trung vì thuật toán này lựa chọn người đáng tin cậy để ủy quyền. Đây là một thuật toán đồng thuận xây dựng dưới dạng dân chủ kĩ thuật số. Tại đó, các nút bầu chọn cho các nút đại biểu (**delegate**) với quyền lực( **voting weight**) nhiều nhất. Nhiệm vụ của nút đại biểu đảm bảo nút luôn mở, thu thập các thông tin trên mạng lưới và thực hiện xác minh và đóng gọi khối. Một đại biểu không có quyền thay đổi thóng tin cụ thể của một giao dịch nhưng lại có quyền loại giao dịch đó ra ngoài block, cho phép nút tiếp theo thêm giao dịch đó vào block và tăng phí giao dịch.

![DPoS](https://i.ibb.co/XVVksB9/image.png)

- **Proof Of Authority** (Bằng chứng Ủy nhiệm): Đây là mô hình tập trung thường thấy trong POA, Networking, Ethereum Kovantestnet. Hiệu suất cao, có khả năng mở rộng tốt nhất. Trong đó, các giao dịch và khối được xác minh bởi các nút được ủy quyền. Qua đó, mỗi cá nhân được ủy quyền và có trách nhiệm giữ vị trí đó. Bằng cách cho một nút một nhân dạng, người dùng có động lực đảm bảo quá trình xác minh khối vì họ không muốn có danh tiến xấu. **PoA** chỉ cho phép các nút được ủy quyền thực hiện việc xác minh nên các mạo hiểm về bảo mật sẽ chỉ tập trung ở các nút đó.
- **Proof Of Weight** (Bằng chứng về khối lượng): Phổ biến trong Algorand, FileCoin. Có thể tùy chỉnh và có khả năng mở rộng tốt. Tuy nhiên quá trình thúc đẩy phát triển là một thách thức lớn. Trong hệ thống này, mỗi người dùng được giao cho một cân nặng (**weight**) nhất định thể hiện mức độ đóng góp của người dùng đó tới mạng lưới. Để tránh các lỗi tấn công và double-spending, phần lớn các người dùng có trọng lượng (2/3) phải là những người dùng thành thật. Được xây dụng trên phương thức Algorand với việc xác minh block chia đều ở các người dung, tuy nhiên người dùng không kiểm được thưởng và khó có thể đảm bảo người dùng chân thật.
- **Byzantine Fault Tolerance** (Chống chịu lỗi đồng thuận): Hệ thống đảm bảo trong một mạng lưới **P2P**, các thông tin gửi ở một nút này được lặp lại hoàn toàn chính xác ở một nút khác. Điều này yêu cầu một phần lớn các nút trong hệ thống hoàn toàn thành thật với nội dung của mình.
 
![DPoS](https://i.ibb.co/jgpsDgs/image.png)

Vấn đề được đặt ra khi tướng quân Byzantine yêu cầu sự nhóm quân của mình tấn công vào thành đồng bộ cùng một lúc nhưng không thể truyền thông tin chính xác đến tất cả nhóm vì có thể xảy ra việc thay đổi nội dung thông tin trong lúc truyền đi. 

Hướng giải quyết của hệ thống được đề ra để tất cả các nút kiểm tra cùng 1 thông tin của mình từ các nút khác nhau và kiểm tra sự đồng thuận ở đại đa số các nút trong hệ thống. 

## Ethereum / Bitcoin
### Bitcoin - Decentralized Payment System
- Một hệ thống sổ cái tường minh sử dụng mệnh giá **Bitcoin** để tiến hành giao dịch như một dạng tiền ảo và không cần một bên thứ ba. Một mạng lưới **bitcoin** bao gồm rất nhiều máy tính cùng tham gia xử lí và giữ bảng lưu của cuốn sổ cái chính. Một người dùng có thể thấy tất cả các giao dịch nhưng không thể biết cụ thể cá nhân đó là ai do sử dụng mã để thể hiện.
- Trong **bitcoin**, người dùng có thể đạt được đồng **bitcoin** thông qua đóng góp tài nguyên của máy để tiến hành đoán đáp án bài toán, giành quyền để thêm khối các giao dịch vào trong chuỗi blockchain. **Bitcoin** sử dụng một thuật toán tăng độ khó của giải thuật (mining difficulty) tự động chỉnh sửa với việc tăng khả năng giải quyết vấn đề của hệ thống (cụ thể là tăng số lượng người tham gia đào bitcoin).
- Lợi nhuận của một người đào bitcoin phụ thuộc vào nhiều yếu tố như: Khả năng tính toán băm, phần thưởng block (thường giảm nửa mỗi 210000 blocks tức khoảng 4 năm), độ khó của việc đào, chi phí để sử dụng hệ thống đào bitcoin, lượng năng lượng sử dụng để đào, chi phí tham gia các pools đào bitcoin ( Tất cả các máy cùng tham gia đào một đáp án và được thưởng tương ứng với phần trăm đóng góp của máy đó), giá bitcoin, sự tăng của độ khó.
- Khi tham gia đào bitcoin, bạn sẽ tạo một ví bitcoin tương ứng để lưu trữ các thông tin liên quan đến tài sản của mình.
- Một ví bitcoin (**Bitcoin Wallet**) lưu trữ **private-key** dùng để quản lý các tài sản của bạn trong hệ thống **bitcoin**. Một ví có nhiệm vụ theo dõi và cập nhật số dư của tài khoản với mỗi giao dịch, gửi và nhận bitcoin.
- Ví HDWallet cho phép tạo ra một **private-key** dựa trên 1 danh sách các từ khóa do người dùng định nghĩa gọi là **seed** . Nếu người dùng có cùng **seed** sẽ là 1 phần của một ví chung.
- Có các loại ví như:
	- Full nodes : Lưu trữ toàn bộ thông tin của bitcoin bao gồm tất cả các thông tin giao dịch.
	- Light wallet: Dựa vào Full node mà nó liên kết tới để kiểm tra, xác minh giao dịch.
	- Hot wallet: Một dạng ví có liên kết đén internet. Đây là dạng ví phổ biến nhưng cũng ít an toàn nhất.
### Ethereum - Decentralized Super Computer
- Một nền tảng (**platform**) phát triển các ứng dụng Dapp (**Decentralize Application**) bằng sử dụng ngôn ngữ **Solidarity** viết các **smart contract** (Các mệnh đề if then để thực hiện các hành động một cách chính xác với các tình huống có thể xảy ra). Một hợp đồng sau khi được đăng lên hệ thống sẽ không thể bị thay đổi.
- **Ethereum** sử dụng đồng tiền **Ether** để giao dịch. Một người dùng muốn đưa ứng dụng lên nền tảng phi tập  trung của **Ethereum** phải trả một số **Ether**. Đồng **Ether** được dùng để trả cho các đơn vị cung cấp máy được dùng để lưu trữ thông tin để bảo dưỡng và trả chi phí duy trì.
- **Ethereum** là một nền tảng bao gồm đầy đủ các chức năng mà không cần đến các tổ chức thứ ba, có một kế hoạch mở rộng rõ ràng và được sự hỗ trợ của nhiều công ty lớn tuy nhiên **Ethereum** không tập trung vào đồng tiền ảo như **Bitcoin** và hiên tại cũng rất ít tài liệu hướng dẫn cách sử dụng nền tảng này
- Có các loại người dùng với hệ thống **Ethereum** bao gồm:
	- **Externally Owned Account (EOA)**: Bao gồm **Ethereum Address**, lưu trữ và được điều khiển thông qua **private-key** . **EOA** có thể tạo hợp đồng thông minh và kích hoạt chúng, gửi và nhận Ether. 
	- **Contract Account**: Bao gồm **Ethereum Address** và **code**. Tài khoản **Contract** không giữ **private-key**. Các dòng lệnh thiết kế hợp đồng bao gồm một nhóm các điều kiện định sẵn để quản lý tài khoản. Tài khoản **Contract** có khả năng nhận và gửi **Ether** hay thậm chí tạo một tài khoản khác.
- Một tài khoản **EOA** có thể giao tiếp với các tài khoản **EOA** và **Contract** khác thông qua các tin nhắn (**Messages**) được gửi trong các giao dịch (được trả bằng **Ether**).
- Một giao dịch của **Ethereum** có thể được dùng với nhiều mục đích:
	- Gửi 1 giá trị ( gửi **Ether** )
	- Dùng để tạo một hợp đồng thông minh ( Bằng cách gửi 1 giao dịch trong đó chứa mã **code** của hợp đồng)
	- Dùng để kích hoạt hợp đồng thông minh
- Tương tự Bitcoin có các loại ví:
	- Full Client / Full Node: Là một máy tính nắm giữ toàn bộ thông tin của hệ thống blockchain từ đầu. Sử dụng full node yêu cầu một lượng lớn bộ nhớ và năng lượng sử dụng nhưng cho phép xác minh giao dịch trên blockchain của Ethereum mà không cần sử dụng bên thứ ba. Full nodes là một phần nguồn lực chính của hệ thống và thường sẽ khó hơn để sử dụng. Một số client phổ biến để chạy Ethereum full nodes bao gồm:
		- **Geth (Go Ethereum)** : Một công cụ phổ biến để phát triền phần mềm và cộng đồng Ethereum user
		- **Mist**: Một giao diện cho phép người dùng bình thường tương tác với Geth
		- **Parity**: Một client cho phép chạy Fullnode của Ethereum. Là phần mềm phổ biến thứ 2(sau Geth)

	- Light Node: Một node dựa trên một full node để lấy các thông tin cần thiết, nắm giữ chỉ một phần của blockchain nên yêu cầu về bộ nhớ ít hơn nhưng phải thông qua một bên thứ ba và dễ sử dụng hơn.
	- Hardware Node: Một node an toàn nhất về mặt bảo mật nhưng chỉ có khả năng gửi và nhận **Ether** coin và không thể viết một hợp đồng thông minh

####Transaction Fees & Gas
- 1 **Ether** có thể được chia  thành 1 tỷ tỷ đơn vị (1 **Ether** = 1,000,000,000,000,000,000 **Wei** - 10^8  **Wei**), phí giao dịch bình thường được tính theo 1 **Gwei** = 1,000,000,000 **Wei**
- **Gas** là nguyên liệu để sử dụng chay từng mã lệnh của **contract** tương tự nguyên lí chạy xe. Khi sử dụng hết **Gas**, code của **contract** sẽ dừng, chính vì vậy người dùng cần viết **contract** một cách gọn gàng hợp lí và cô đặc vì **Gas** tốn tiền. Số tiền trả cho **Gas** được gửi cho người đào do họ đóng góp tài nguyên máy tính cho việc thêm các giao dịch vào hệ thống **Ethereum** 
- **Gas** mang lại một giá trị cố định tương ứng với mỗi hành động thay vì chọn các giá khác nhau của đồng **Ether** cho hành động đó.Giá của **Gas** thay đổi tùy thuộc độ đông của mạng lưới.
- Khi gửi một giao dịch, ta cần nêu rõ giới hạn **Gas** được sử dụng ( trả trước ) và sẽ không có cách nào bổ sung lượng **Gas** đã đặt ra (refueling) nên cần tránh các việc như trả thiếu **gas** vì nếu đặt ra nhiều hơn **gas** sự dụng sẽ được refund nhưng nếu đặt ra ít hơn thì sẽ mất lượng đã đặt ra (no refund). Điều này có thể xảy ra trong một số trường hợp như dòng mã lệnh chạy vòng lặp đệ qui vào sử dụng hết nhiên liệu.
- Fees = Gas used x Gas bid.

### Ví MEW - My Ether Wallet
- Ví MEW là một client chuyên được dùng để lưu trữ các token chạy trên nền tảng **Ethereum**

### Ethereum Mainnet & Testnet
![Main net & Test net](https://masterthecrypto.com/wp-content/uploads/2019/01/wsi-imageoptim-main20vs20test1.png)

- So với mainnet - một mạng lưới blockchain đầy đủ chức năng - testnet là một mạng lưới blockchain được tạo ra và mô phỏng với mục đích như một môi trường thử nghiệm, tại đó, các giao dịch và các đồng tiền tệ ảo được mô phỏng nhưng không có giá trị thật sự.

- Môi trường testnet là nơi được dùng để phát triển và kiểm thử các chức năng của mạng lưới blockchain chính để đảm bảo sự toàn vẹn của hệ thống chính.


---

# B. Ethereum - Solidity 
## 1. Setup a local ethereum testnet
