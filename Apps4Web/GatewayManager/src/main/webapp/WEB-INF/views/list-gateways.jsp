<%@ include file="common/header.jspf" %>
<%@ include file="common/navigation.jspf" %>
	
	<div class="container">
		<table class="table table-striped">
			<caption>List of your gateways</caption>
			<thead>
				<tr>
					<th>Gateway ID</th>
					<th>GatewayName</th>
					<th>Gateway IP</th>
					<th>Devices</th>
				</tr>
			</thead>
			<tbody>
				<c:forEach items="${gateways}" var="gateway">
					<tr>
						<td>${gateway.id}</td>
						<td>${gateway.gatewayName}</td>
						<td>${gateway.ipAddress}</td>
						<td>${gateway.devices}</td>
						<td><a type="button" class="btn btn-success"
							href="/update-gateway?id=${gateway.id}">Update Devices</a></td>
						<td><a type="button" class="btn btn-warning"
							href="/delete-gateway?id=${gateway.id}">Delete Gateway</a></td>
					</tr>
				</c:forEach>
			</tbody>
		</table>
		<div>
			<a class="button" href="/add-gateway">Add Gateway</a>
		</div>
	</div>
<%@ include file="common/footer.jspf" %>